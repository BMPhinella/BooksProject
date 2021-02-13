<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('Books', function (Blueprint $table){
                $table->bigIncrements('id');
                $table->string('title');
                $table->string('author');
                $table->string('publication_date');
                $table->integer('updated_by')->nullable();
                $table->integer('created_by')->nullable();
                $table->softdeletes('deleted at');
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
        Schema::dropIfExists('Books');
    }
}
