<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReviewEloquent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create table fields
        Schema::create('review_eloquent', function (Blueprint $table)
        {
            $table ->increments('id');
            $table ->string('heading');
            $table->string('notes');
            $table ->string('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // delete table
        Schema::dropIfExists('revieweloquent');                                                                                            
    }
}
