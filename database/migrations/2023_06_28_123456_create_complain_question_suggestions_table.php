<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('complain_question_suggestions', function (Blueprint $table) {
            $table->id();
            $table->string('complaint')->nullable();
            $table->string('question')->nullable();
            $table->string('suggestion')->nullable();
            $table->string('uniqid');
            $table->timestamps();
        });
        Schema::table('f_a_q_s', function ($table) {
            $table->dropColumn('suggestion_complain_question');
        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complain_question_suggestions');
    }
};
