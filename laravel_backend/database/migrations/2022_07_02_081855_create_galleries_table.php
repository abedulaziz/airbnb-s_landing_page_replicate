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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->mediumText("image1");
            $table->mediumText("image2");
            $table->mediumText("image3");
            $table->mediumText("image4");
            $table->mediumText("image5");
            $table->mediumText("image6")->nullable();
            $table->mediumText("image7")->nullable();
            $table->mediumText("image8")->nullable();
            $table->mediumText("image9")->nullable();
            $table->mediumText("image10")->nullable();
            $table->mediumText("image11")->nullable();
            $table->mediumText("image12")->nullable();
            $table->mediumText("image13")->nullable();
            $table->mediumText("image14")->nullable();
            $table->mediumText("image15")->nullable();
            $table->mediumText("image16")->nullable();
            $table->mediumText("image17")->nullable();
            $table->mediumText("image18")->nullable();
            $table->mediumText("image19")->nullable();
            $table->mediumText("image20")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
};
