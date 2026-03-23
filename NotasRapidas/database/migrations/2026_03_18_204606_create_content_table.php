<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('content', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('note_content', 250);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('content');
    }
};