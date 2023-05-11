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
        Schema::create('flujo_documentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_documento');
            $table->timestamp('fecha_recepcion')->nullable();
            $table->string('id_programa', 5);
            $table->text('obs')->nullable();
            $table->timestamps();

            $table->foreign('id_documento')->references('id')->on('documentos');
            // Puedes agregar otras relaciones de clave externa si es necesario
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flujo_documentos');
    }
};
