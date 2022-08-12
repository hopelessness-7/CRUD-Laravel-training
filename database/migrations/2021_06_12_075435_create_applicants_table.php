<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->integer('Registration_number')->unsigned()->nullable()->default(12);
            $table->date('Date_of_receipt_of_the_application');
            $table->integer('School_Number')->unsigned()->nullable()->default(12);
            $table->string('Full_Name');
            $table->date('Date_of_birth');
            $table->string('balls');
            $table->string('Passport');
            $table->string('Registration');
            $table->string('Telephone');
            $table->string('Certificate/Diploma');
            $table->string('Conscript_ID');
            $table->string('MC');
            $table->string('INN');
            $table->string('SS');
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
        Schema::dropIfExists('applicants');
    }
}
