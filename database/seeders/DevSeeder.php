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
                'nome' => 'Aldere',
                'funcao' => 'Desenvolvedor Full Stack',
                'foto' => 'img/devs/aldere.jpeg',
            ],
            [
                'nome' => 'Beatriz',
                'funcao' => 'Back-end',
                'foto' => 'img/devs/beatriz.jpeg',
            ],
            [
                'nome' => 'Cesar',
                'funcao' => 'Front-end',
                'foto' => 'img/devs/cesar.jpeg',
            ],
            [
                'nome' => 'Felipe',
                'funcao' => 'Back-end',
                'foto' => 'img/devs/felipe.jpeg',
            ],
            [
                'nome' => 'Geo Campanella',
                'funcao' => 'Analista de Sistemas',
                'foto' => 'img/devs/geoCampanella.jpeg',
            ],
            [
                'nome' => 'Gio Emanuelly',
                'funcao' => 'UI/UX',
                'foto' => 'img/devs/gioEmanuelly.jpeg',
            ],
            [
                'nome' => 'Gustavo',
                'funcao' => 'DevOps',
                'foto' => 'img/devs/gustavo.jpeg',
            ],
            [
                'nome' => 'Marco',
                'funcao' => 'Engenheiro de Software',
                'foto' => 'img/devs/Marco.jpeg',
            ],
            [
                'nome' => 'Mateus V',
                'funcao' => 'QA',
                'foto' => 'img/devs/mateusV.jpeg',
            ],
            [
                'nome' => 'Matheus Dias',
                'funcao' => 'Arquiteto de Solucoes',
                'foto' => 'img/devs/matheusDias.jpeg',
            ],
            [
                'nome' => 'Natan',
                'funcao' => 'Especialista em Dados',
                'foto' => 'img/devs/natan.jpeg',
            ],
            [
                'nome' => 'Vitor',
                'funcao' => 'Seguranca da Informacao',
                'foto' => 'img/devs/vitor.jpeg',
            ],
        ];

        foreach ($devs as $dev) {
            DB::table('dev')->updateOrInsert(
                ['nome' => $dev['nome']],
                $dev
            );
        }
    }
}
