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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');  
            $table->string('email')->unique();
            $table->text('image')->nullable();
            $table->string('password')->nullable();
            $table->string('address')->nullable();
            $table->integer('phone')->nullable();
            $table->tinyInteger('type')->default(0);
            $table->unsignedBigInteger('warehouse_id')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};