<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_company',
        'no_hp',
        'nama_depan',
        'nama_belakang',
        'username',
        'email',
        'password',
        'status_auth',
        'status_active'
    ];
}
