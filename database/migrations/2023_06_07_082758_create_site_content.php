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
        Schema::create('site_content', function (Blueprint $table) {
            $table->id();
            $table->string('company_summary');
            $table->string('snapshot_array');
            $table->string('uniqid');
            $table->string('vision');
            $table->string('mission');
            $table->string('innovationn_summary');
            $table->string('training_program_summary');
            $table->text('our_goal');
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
        Schema::dropIfExists('site_content');
    }
};
