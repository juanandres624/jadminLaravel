<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GenderType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MngGenderType', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('genderDescription');
            $table->unsignedBigInteger('statusType_id');
            $table->timestamps();

            $table->foreign('statusType_id')
            ->references('id')
            ->on('MngstatusType')
            ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
