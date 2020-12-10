<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;


class Medico extends Model
{
    protected $fillable = [
        'nome', 'telefone', 'crm', 'especializacoes', 'email', 'password', 'nota'
    ];

    protected $hidden = ["password"];

    public function getCreatedAtAttribute($value)
    {
        return dateFormatDatabaseScreen($value, 'screen');
    }

    public function setPasswordAttribute($password)
    {
        if (!empty($password)) {
            $this->attributes['password'] = Hash::make($password);
        }
    }
}