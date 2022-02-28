<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangetransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchangetransactions', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('transactionNumber')->unique();
            $table->string("beneficiary_id");
            $table->date("date");
            $table->integer("value");
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
        Schema::dropIfExists('exchangetransactions');
    }
}
