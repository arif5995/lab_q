<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_users', function (Blueprint $table) {
            $table->bigIncrements('id_client');
            $table->integer('id_role')->default('2');
            $table->string('name_company');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_hp');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->integer('status_auth');
            $table->integer('status_active');
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
        Schema::dropIfExists('client_users');
    }
}
