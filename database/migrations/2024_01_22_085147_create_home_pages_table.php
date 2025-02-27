<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->longText('vision');
            $table->longText('mission');
            $table->string('about_title');
            $table->longText('about_text');
            $table->string('about_image1');
            $table->string('about_image2');
            $table->string('journey_image1');
            $table->string('journey_image2');
            $table->string('eval_image');
            $table->string('eval_title');
            $table->string('eval_text');
            $table->string('prograss1');
            $table->string('prograss1_percent');
            $table->string('prograss2');
            $table->string('prograss2_percent');
            $table->string('prograss3');
            $table->string('prograss3_percent');
            $table->longText('course_text');
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
        Schema::dropIfExists('home_pages');
    }
}
