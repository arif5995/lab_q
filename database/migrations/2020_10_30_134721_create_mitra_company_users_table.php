<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitraCompanyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra_company_users', function (Blueprint $table) {
            $table->id();
            $table->integer('id_role');
            $table->integer('id_client');
            $table->string('address');
            $table->string('phone');
            $table->string('company_name');
            $table->string('kode_pos');
            $table->string('email')->unique();
            $table->string('password');
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
        Schema::dropIfExists('mitra_company_users');
    }
}
