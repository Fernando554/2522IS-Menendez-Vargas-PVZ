<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('dinosaurios');
        
        Schema::create('dinosaurios', function (Blueprint $table) {
            $table->id('id');
            $table->string('Nombre');
            $table->Text('Descripcion');
            $table->string('Altura');
            $table->string('Peso');
            $table->string('Imagen');
            $table->text('Region');
            $table->text('Area_Geologica');
            $table->string('owner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
