<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Photos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Photos', function (Blueprint $table) {
            $table->id();
            $table->string("title",200);
            $table->text("description",200)->nullable(true);
            $table->dateTime("date")->nullable(true);
            $table->binary("file");
            $table->string("resolution",200)->nullable(true);
            $table->integer("width");
            $table->integer("height");
            $table->foreignId("group_id")->nullable(true);
            $table->foreignId("user_id")->nullable(true);
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
        Schema::dropIfExists('Photos');
    }
}
