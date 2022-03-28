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
        Schema::create('edifices', function (Blueprint $table) {
            try {
                $table->id();
                $table->string('name');
                $table->timestamps();
            } catch (\Exception $e) {
                echo ' |** Error ' . $e->getMessage();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('edifices');
    }
};
