<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Notes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function(Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();

            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('user_id');
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
}
