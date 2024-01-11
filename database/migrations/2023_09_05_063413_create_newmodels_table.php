<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * 
     */
    public function up(): void
    {
        Schema::create('newmodels', function (Blueprint $table) {
            $table->id();
            $table->string('sname');
            $table->string('sadd');
            $table->string('sage');
            $table->string('semail');
            $table->string('gender');
            $table->string('sphone');
            $table->string('state');
            $table->string('psw');
            $table->string('pic');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     *
     */
    public function down(): void
    {
        Schema::dropIfExists('newmodels');
    }
};
