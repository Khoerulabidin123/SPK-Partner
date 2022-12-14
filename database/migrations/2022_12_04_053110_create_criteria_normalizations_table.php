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
        Schema::create('criteria_normalizations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('comparison_id');
            $table->float('value', 8, 4);
            $table->timestamps();

            $table->foreign('comparison_id')->references('id')->on('criteria_comparisons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criteria_normalizations');
    }
};
