<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContohsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contohs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->Integer('umur');
            $table->string('alamat');
            $table->String('kelas');
            $table->String('hobby');
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
        Schema::dropIfExists('contohs');
    }
}
