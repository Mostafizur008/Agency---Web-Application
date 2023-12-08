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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->json('category_id')->nullable();
            $table->json('sub_category_id')->nullable();
            $table->string('title')->nullable();
            $table->text('summery')->nullable();
            $table->string('gar')->nullable();
            $table->string('war')->nullable();
            $table->string('price')->nullable();
            $table->string('made')->nullable();
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
        Schema::dropIfExists('services');
    }
};
