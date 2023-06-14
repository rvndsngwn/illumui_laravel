<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextDataTable extends Migration
{
    public function up()
    {
        Schema::create('text_data', function (Blueprint $table) {
            $table->id();
            $table->text('text_field');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('text_data');
    }
}

