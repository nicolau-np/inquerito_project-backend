<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReactionCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reaction_comments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('id_reaction_type')->unsigned()->index();
            $table->bigInteger('id_comment')->unsigned()->index();
            $table->string('status')->default('on');
            $table->timestamps();
        });

        Schema::table('reaction_comments', function (Blueprint $table) {
            $table->foreign('id_reaction_type')->references('id')->on('reaction_types')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_comment')->references('id')->on('comments')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reaction_comments');
    }
}