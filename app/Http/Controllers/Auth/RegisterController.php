<?php

namespace App\Http\Controllers\Auth;

use App\Mail\UserRegistered;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        $ref = Cookie::has('referral') ? Cookie::get('referral') : null;

        if ($ref != null) {
            $referrer = User::where('affiliate_id', $ref)->first();

            DB::beginTransaction();
            try {
                if ($referrer) {
                    $referrer->referral_count += 1;
                    $referrer->save();
                    $referrer = User::where('affiliate_id', $referrer->referred_by)->first();
                }
            } catch (\Exception $e) {
                DB::rollBack();
                die("Some errors");
            }
            DB::commit();
        }
        Cookie::queue(Cookie::forget('referral'));

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'affiliate_id' => str_random(16),
            'referred_by' => $ref
        ]);

        $this->sendEmailAfterRegistration($data['email']);
        return $user;
    }

    private function sendEmailAfterRegistration($email)
    {
        try {
            Mail::to($email)->send(new UserRegistered());
        } catch (\Exception $e) {
            Storage::append('send_user_email_after_registration_error.log', $e->getMessage());
        }
    }
}
