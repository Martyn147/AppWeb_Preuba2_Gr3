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
        Schema::create('images', function (Blueprint $table) {
            $table->string('url')->default('https://cdn-icons-png.flaticon.com/512/149/149071.png');
            $table->string('public_id')->nullable();
            $table->unsignedBigInteger('imageable_id');
            $table->string('imageable_type');
            $table->primary(['imageable_id','imageable_type']);
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
        Schema::dropIfExists('images');
    }
};
