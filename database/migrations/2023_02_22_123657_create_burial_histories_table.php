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
        Schema::create('burial_histories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('burial_area')->nullable();
            $table->string('grave_number')->nullable();
            $table->string('row_number')->nullable();
            $table->string('column_number')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('burial_histories');
    }
};
