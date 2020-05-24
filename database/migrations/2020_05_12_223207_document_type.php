<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DocumentType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MngDocumentType', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('documentDescription');
            $table->unsignedBigInteger('statusType_id');
            $table->timestamps();

            $table->foreign('statusType_id')
            ->references('id')
            ->on('MngStatusType')
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
