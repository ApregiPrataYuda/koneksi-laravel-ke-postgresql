<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTable extends Migration
{
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->id(); // Kolom ID dengan auto-increment
            $table->string('title'); // Judul pekerjaan
            $table->text('description'); // Deskripsi pekerjaan
            $table->decimal('salary', 15, 2); // Gaji pekerjaan dengan format desimal
            $table->timestamps(); // Kolom 'created_at' dan 'updated_at'
        });
    }
};
