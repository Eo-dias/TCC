<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuracao extends Model
{
    use HasFactory;

    protected $table = 'configuracoes';

    protected $fillable = [
        'chave',
        'valor',
        'descricao',
    ];

    public static function getValor($chave, $default = '#')
    {
        $config = self::where('chave', $chave)->first();
        return $config ? $config->valor : $default;
    }
}