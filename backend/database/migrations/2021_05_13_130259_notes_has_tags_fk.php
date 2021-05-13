<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NotesHasTagsFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notes_has_tags', function(Blueprint $table) {
            $table->foreign('tag_id')
                  ->references('id')
                  ->on('tags');
            $table->foreign('note_id')
                  ->references('id')
                  ->on('notes');
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
