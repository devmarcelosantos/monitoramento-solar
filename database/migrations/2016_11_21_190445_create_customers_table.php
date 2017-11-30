<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id')->unsignd();
            $table->string('name', 100);
            $table->string('cpf', 11)->nullable();
            $table->string('cnpj', 14)->nullable();
            $table->string('cep', 8);
            $table->string('complement', 50)->nullable();
            $table->string('number', 8);
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
        Schema::dropIfExists('customers');
    }
}
