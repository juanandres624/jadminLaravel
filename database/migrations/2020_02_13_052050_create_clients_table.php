<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clientName');
            $table->string('clientLastName');
            $table->string('clientDocNumber',10);
            $table->string('clientEmail');
            $table->string('clientPhoneNumber');
            $table->string('clientCellPhoneNumber');
            $table->string('clientPersonalAddress');
            $table->string('clientOfficeAddress');
            $table->string('createdBy');
            $table->string('clientNote');
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
        Schema::dropIfExists('clients');
    }
}
