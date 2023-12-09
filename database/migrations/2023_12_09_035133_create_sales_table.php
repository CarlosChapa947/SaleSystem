<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id('sale_id');
            $table->date('date');
            $table->unsignedBigInteger('client_id');
            $table->decimal('discount', 10, 2)->nullable();
            $table->decimal('final_amount', 10, 2);
            $table->foreign('client_id')->references('client_id')->on('clients');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
