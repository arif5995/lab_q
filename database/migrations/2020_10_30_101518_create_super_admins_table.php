<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('super_admins', function (Blueprint $table) {
            $table->bigIncrements('id_admin');
            $table->integer('id_role')->default('1');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_hp');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->dateTime('last_seen');
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
        Schema::dropIfExists('super_admins');
    }
}
