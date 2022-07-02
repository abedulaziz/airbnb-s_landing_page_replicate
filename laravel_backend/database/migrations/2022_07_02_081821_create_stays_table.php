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
        Schema::create('stays', function (Blueprint $table) {
            $table->id();
            $table->string("location");
            $table->integer("category_id");
            $table->integer("gallery_id");
            $table->integer("distance");
            $table->integer("cost");
            $table->tinyInteger("rate");
            $table->enum("region", ["flexible", "middle_east", "italy", "united_states", "france", "south_america"]);
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
        Schema::dropIfExists('stays');
    }
};
