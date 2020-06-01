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
        Schema::create('Clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clientName');
            $table->string('clientLastName');
            $table->date('clientBirthDate');
            $table->unsignedBigInteger('documentType_id');
            $table->unsignedBigInteger('genderType_id');
            $table->string('clientDocNumber',10)->unique();
            $table->string('clientEmail')->unique();
            $table->string('clientPhoneNumber');
            $table->string('clientCellPhoneNumber');
            $table->string('clientPersonalAddress');
            $table->string('clientOfficeAddress');
            $table->string('clientNote');
            $table->unsignedBigInteger('createdBy');
            $table->unsignedBigInteger('statusType_id');
            $table->timestamps();

            $table->foreign('documentType_id')
            ->references('id')
            ->on('MngDocumentType') 
            ->onDelete('cascade'); 

            $table->foreign('genderType_id')
            ->references('id')
            ->on('MngGenderType')
            ->onDelete('cascade');

            $table->foreign('statusType_id')
            ->references('id')
            ->on('MngStatusType')
            ->onDelete('cascade'); 

            $table->foreign('createdBy')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('clients');
    }
}
