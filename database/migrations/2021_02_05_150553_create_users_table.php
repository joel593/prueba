<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('config_id')->nullable();
            $table->string('nombreUser');
            $table->string('nombreCompleto');
            $table->string('email');
            $table->string('telefono');
            $table->string('edad');
            $table->string('dateBirth')->nullable();
            $table->foreign('config_id')->references('id')->on('configs')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
