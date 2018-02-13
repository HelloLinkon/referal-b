<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $table = 'form_data';
    protected $fillable = ['first_name', 'last_name', 'email', 'telegram_id', 'country', 'amount_participate', 'favorite_cryptocurrency', 'hear_source', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
