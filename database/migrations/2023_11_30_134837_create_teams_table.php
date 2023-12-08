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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('rate')->nullable();
            $table->string('work')->nullable();
            $table->string('satisfied')->nullable();
            $table->text('summery')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('position')->nullable();
            $table->string('experience')->nullable();
            $table->string('address')->nullable();
            $table->string('fb')->nullable();
            $table->string('tw')->nullable();
            $table->string('wh')->nullable();
            $table->string('in')->nullable();
            $table->string('image')->nullable();
            $table->string('photo')->nullable();
            $table->tinytext('status')->default('1');
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
        Schema::dropIfExists('teams');
    }
};
