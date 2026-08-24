<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialLinksToDevsTable extends Migration
{
    public function up()
    {
        Schema::table('devs', function (Blueprint $table) {
            $table->string('github')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
        });
    }

    public function down()
    {
        Schema::table('devs', function (Blueprint $table) {
            $table->dropColumn('github');
            $table->dropColumn('linkedin');
            $table->dropColumn('instagram');
        });
    }
}