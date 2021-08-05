<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommendElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commend__elements', function (Blueprint $table) {
            $table->id();
            $table->string('quantitie');
            $table->string('prix');
            $table->foreignId('article_id')->constrained();
            $table->foreignId('commend_id')->constrained();
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
        Schema::dropIfExists('commend__elements');
    }
}
