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
        Schema::create('donators', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profession');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('age');
            $table->text('permanent_address');
            $table->text('present_address');
            $table->string('nationality');
            $table->string('relegion');
            $table->bigInteger('NID');
            $table->bigInteger('birth_id');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('image');
            $table->tinyInteger('status');
            $table->string('type');
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
        Schema::dropIfExists('donators');
    }
};
