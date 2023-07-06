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
        Schema::table('site_content', function ($table) {
            $table->longtext('about_home_paragraph')->nullable();
            $table->longtext('about_us')->nullable();
            $table->dropColumn('company_summary');
            $table->dropColumn('innovationn_summary');
            $table->dropColumn('training_program_summary');
       
            
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
};
