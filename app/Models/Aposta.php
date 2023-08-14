<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aposta extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'apostas';

    protected $fillable = ['id', 'name', 'status'];

    protected $casts = [
        'status' => 'boolean'
    ];
}
