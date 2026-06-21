<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dev;

class DevSeeder extends Seeder
{
    public function run(): void
    {
        Dev::create([
            'nome' => 'Matheus Dias',
            'funcao' => 'Desenvolvedor Full Stack',
            'foto' => 'img/matheus.png',
        ]);

        Dev::create([
            'nome' => 'Dev 2',
            'funcao' => 'Front-end',
            'foto' => 'img/dev2.png',
        ]);

        Dev::create([
            'nome' => 'Dev 3',
            'funcao' => 'Back-end',
            'foto' => 'img/dev3.png',
        ]);
    }
}