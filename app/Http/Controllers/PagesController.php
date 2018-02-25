<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWhitelist;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class PagesController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function saveForm(CreateWhitelist $request)
    {
        $user = $request->user();
        $user->formData()->create($request->all());
        return redirect('/?ref=' . $user->affiliate_id);
    }

    public function generateCsvFileWithEmails($secretKey)
    {
        $key = config('app.secret_key_to_email_access');
        if ($secretKey !== $key) {
            return redirect('/');
        } else {
            $fileName = $key;
            $data = [];
            $users = User::select('email')->get();
            foreach ($users as  $user) {
                $data[] = $user->email;
            }

            Excel::create($fileName, function ($excel) use ($data) {
                $excel->sheet('products', function ($sheet) use ($data) {
                    $sheet->fromArray($data, null, 'A1', false, false);
                });
            })->store('csv', public_path() . DIRECTORY_SEPARATOR);

            return response()->download(public_path() . DIRECTORY_SEPARATOR . $fileName . ".csv");
        }
    }
}
