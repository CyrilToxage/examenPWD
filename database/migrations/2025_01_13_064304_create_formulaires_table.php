<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulairesTable extends Migration
{
    public function up()
    {
        Schema::create('formulaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('version');
            $table->date('date_creation');
            $table->foreignId('module_id')->constrained('modules')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('formulaires');
    }
}
