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
        Schema::create('flujo_tramite', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo_tramite');
            $table->string('id_programa', 5);
            $table->smallInteger('orden');
            $table->time('tiempo')->nullable();
            $table->char('estado', 1);
            $table->timestamps();

            $table->foreign('id_tipo_tramite')->references('id')->on('tipo_tramite');
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
        Schema::dropIfExists('flujo_tramite');
    }
};
