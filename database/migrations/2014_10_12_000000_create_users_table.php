<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('siswa_id')->nullable()->unsigned()->index();
            $table->string('username', 20)->nullable();
            $table->string('password', 20);
            $table->string('name', 20)->nullable();
            $table->enum('siswa', ['siswa', 'petugas', 'admin'])->default('siswa');
            $table->char('nisn', 10)->nullable();
            $table->timestamps();

            $table->foreign('siswa_id')->references('id')->on('siswas');
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
