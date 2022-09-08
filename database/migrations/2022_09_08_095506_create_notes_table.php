<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('module_id')->unsigned();
            $table->foreign('module_id')->references('id')->on('modules');
            $table->bigInteger('etudiant_id')->unsigned();
            $table->foreign('etudiant_id')->references('id')->on('users');
            $table->integer('note');
            $table->string('recour')->nullable();
            $table->string('justification')->nullable();
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
        //
    }
}
