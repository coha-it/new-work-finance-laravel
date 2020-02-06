<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->nullable();
            $table->ipAddress('ip')->nullable();

            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('position')->nullable();
            $table->string('streetandnumber')->nullable();
            $table->string('zipandlocation')->nullable();
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->string('ustid')->nullable();
            $table->string('message')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->json('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
