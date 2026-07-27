<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DevSeeder extends Seeder
{
    public function run(): void
    {
        $devs = [
            [
                'nome' => 'Geovanny',
                'funcao' => 'Diretor/Desenvolvedor Back-End',
                'foto' => 'img/devs/aldere.jpeg',
            ],
            [
                'nome' => 'Beatriz',
                'funcao' => 'TPA',
                'foto' => 'img/devs/beatriz.jpeg',
            ],
            [
                'nome' => 'Cesar',
                'funcao' => 'Desenvolvedor Front-End',
                'foto' => 'img/devs/cesar.jpeg',
            ],
            [
                'nome' => 'Felipe',
                'funcao' => 'Desenvolvedor Fullstacl/DBA',
                'foto' => 'img/devs/felipe.jpeg',
            ],
            [
                'nome' => ' Geovanna Campanella',
                'funcao' => 'Front-End/Analista',
                'foto' => 'img/devs/geoCampanella.jpeg',
            ],
            [
                'nome' => 'Giovanna Emanuely',
                'funcao' => 'UI/UX',
                'foto' => 'img/devs/gioEmanuely.jpeg',
            ],
            [
                'nome' => 'Gustavo',
                'funcao' => 'Designer',
                'foto' => 'img/devs/gustavo.jpeg',
            ],
            [
                'nome' => 'Marco',
                'funcao' => 'Desenvolvedor Back-End',
                'foto' => 'img/devs/Marco.jpeg',
            ],
            [
                'nome' => 'Mateus V',
                'funcao' => 'Desenvolvedor Back-End/DBA',
                'foto' => 'img/devs/mateusV.jpeg',
            ],
            [
                'nome' => 'Matheus Dias',
                'funcao' => 'Desenvolvedor Fullstack',
                'foto' => 'img/devs/matheusDias.jpeg',
            ],
            [
                'nome' => 'Natan',
                'funcao' => 'tester',
                'foto' => 'img/devs/natan.jpeg',
            ],
            [
                'nome' => 'Vitor',
                'funcao' => 'Gerente/Desenvolvedor Back-End',
                'foto' => 'img/devs/vitor.jpeg',
            ],
        ];

        foreach ($devs as $dev) {
            DB::table('devs')->updateOrInsert(
                ['nome' => $dev['nome']],
                $dev
            );
        }
    }
}
