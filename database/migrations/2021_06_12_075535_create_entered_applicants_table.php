<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnteredApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entered_applicants', function (Blueprint $table) {
            $table->id();
            $table->foreignid('applicant_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('Status_documents', 100)->nullable()->default('text');
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
        Schema::dropIfExists('entered_applicants');
    }
}
