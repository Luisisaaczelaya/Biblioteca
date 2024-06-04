<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->date('date');
            $table->string('transmitter');
            $table->string('receiver');
            $table->float('amount');
            $table->string('half');
            $table->integer('bank_account_id')->unsigned();
            $table->foreign('bank_account_id')->references('id')->on('bank_account')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
