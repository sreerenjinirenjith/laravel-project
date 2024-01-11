<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelregisterations', function (Blueprint $table) {
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
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modelregisterations');
    }
};
