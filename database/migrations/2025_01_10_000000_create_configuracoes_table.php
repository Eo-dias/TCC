<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('configuracoes', function (Blueprint $table) {
            $table->id();
            $table->string('chave')->unique();
            $table->text('valor')->nullable();
            $table->string('descricao')->nullable();
            $table->timestamps();
        });

        DB::table('configuracoes')->insert([
            ['chave' => 'instagram', 'valor' => 'https://instagram.com/raven', 'descricao' => 'Link do Instagram', 'created_at' => now(), 'updated_at' => now()],
            ['chave' => 'whatsapp', 'valor' => 'https://wa.me/5511999999999', 'descricao' => 'Link do WhatsApp', 'created_at' => now(), 'updated_at' => now()],
            ['chave' => 'linkedin', 'valor' => 'https://linkedin.com/company/raven', 'descricao' => 'Link do LinkedIn', 'created_at' => now(), 'updated_at' => now()],
            ['chave' => 'twitter', 'valor' => 'https://x.com/raven', 'descricao' => 'Link do X (Twitter)', 'created_at' => now(), 'updated_at' => now()],
            ['chave' => 'github', 'valor' => 'https://github.com/raven', 'descricao' => 'Link do GitHub', 'created_at' => now(), 'updated_at' => now()],
            ['chave' => 'threads', 'valor' => 'https://threads.net/@raven', 'descricao' => 'Link do Threads', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('configuracoes');
    }
};