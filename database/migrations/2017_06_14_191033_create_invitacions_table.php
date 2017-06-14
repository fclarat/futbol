<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitacions', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean("confirmado");
            $table->foreign('jugador_id')->references('id')
                ->on('jugadors')->onDelete('cascade');
            $table->foreign('cancha_id')->references('id')
                ->on('canchas')->onDelete('cascade');
            $table->foreign('partido_id')->references('id')
                ->on('partidos')->onDelete('cascade');
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
        Schema::dropIfExists('invitacions');
    }
}
