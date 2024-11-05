<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('usuarios_guiñez', function (Blueprint $table) {
            $table->string('ID_Nombre')->mediumint(); // Ajusta el tipo según tus necesidades
        });
    }
    
    public function down()
    {
        Schema::table('usuarios_guiñez', function (Blueprint $table) {
            $table->dropColumn('ID_Nombre');
        });
    }
};
