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
        Schema::create('bank_account', function (Blueprint $table) {
            $table->increments('id');
            $table->string('holder');
            $table->string('movements');
            $table->string('type');
            $table->integer('customers_id')->unsigned();
            $table->foreign('customers_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_account');
    }
};
