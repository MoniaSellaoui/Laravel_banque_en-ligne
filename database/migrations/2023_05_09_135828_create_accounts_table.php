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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('accountnumber');
            $table->string('city');
            $table->string('email');
            $table->integer('balance');
            $table->integer('phone');
            $table->integer('cnic');
            $table->string('accounttype');
            $table->string('address');
            $table->string('password');
            $table->string('source');
            $table->string('photo');
            $table->string('branchname');
            $table->string('branchcode');

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
        Schema::dropIfExists('accounts');
    }
};
