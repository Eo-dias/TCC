<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devs extends Model
{
    use HasFactory;

    protected $table = 'dev';

    public $timestamps = false  ;

    public $fillable = [
        'nome',
        'funcao',
        'foto',
    ];
}
