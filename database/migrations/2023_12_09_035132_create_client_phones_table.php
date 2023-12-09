<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientPhonesTable extends Migration
{
    public function up()
    {
        Schema::create('client_phones', function (Blueprint $table) {
            $table->id('phone_id');
            $table->unsignedBigInteger('client_id');
            $table->string('phone');
            $table->foreign('client_id')->references('client_id')->on('clients')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('client_phones');
    }
}
