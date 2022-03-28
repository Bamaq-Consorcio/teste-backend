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
        Schema::create('residents', function (Blueprint $table) {
            try {
                $table->id();
                $table->string('name');
                $table->string('email');
                $table->string('phone');
                $table->foreignId('vehicle_id')->constrained('vehicles');
                $table->foreignId('apartment_id')->constrained('apartments');
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
        Schema::dropIfExists('residents');
    }
};
