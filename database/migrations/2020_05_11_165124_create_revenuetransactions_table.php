<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevenuetransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revenuetransactions', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('transactionNumber')->unique();
            $table->string("benefactors_id");
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
        Schema::dropIfExists('revenuetransactions');
    }
}
