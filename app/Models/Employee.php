<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
    'cpf_cnpj',
    'rg',
    'name',
    'mother',
    'father',
    'avatar',
    'sex',
    'birth_date',
    'id_user_type',
    'id_user_status'
];
}