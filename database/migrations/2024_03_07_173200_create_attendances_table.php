<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->string("location")->nullable();
            $table->string("attendee_name")->nullable();
            $table->string("organization")->nullable();
            $table->string("phone")->nullable();
            $table->string("area_of_service")->nullable();
            $table->integer("d_8th")->nullable();
            $table->integer("d_8th_start")->nullable();
            $table->integer("d_8th_end")->nullable();
            $table->integer("d_9th")->nullable();
            $table->integer("d_9th_start")->nullable();
            $table->integer("d_9th_end")->nullable();
            $table->integer("d_10th")->nullable();
            $table->integer("d_10th_start")->nullable();
            $table->integer("d_10th_end")->nullable();
            $table->integer("d_11th")->nullable();
            $table->integer("d_11th_start")->nullable();
            $table->integer("d_11th_end")->nullable();
            $table->integer("d_12th")->nullable();
            $table->integer("d_12th_start")->nullable();
            $table->integer("d_12th_end")->nullable();
            $table->integer("d_13th")->nullable();
            $table->integer("d_13th_start")->nullable();
            $table->integer("d_13th_end")->nullable();
            $table->integer("d_14th")->nullable();
            $table->integer("d_14th_start")->nullable();
            $table->integer("d_14th_end")->nullable();
            $table->integer("d_15th")->nullable();
            $table->integer("d_15th_start")->nullable();
            $table->integer("d_15th_end")->nullable();
            $table->integer("d_16th")->nullable();
            $table->integer("d_16th_start")->nullable();
            $table->integer("d_16th_end")->nullable();
            $table->integer("d_17th")->nullable();
            $table->integer("d_17th_start")->nullable();
            $table->integer("d_17th_end")->nullable();
            $table->integer("d_18th")->nullable();
            $table->integer("d_18th_start")->nullable();
            $table->integer("d_18th_end")->nullable();
            $table->integer("d_19th")->nullable();
            $table->integer("d_19th_start")->nullable();
            $table->integer("d_19th_end")->nullable();
            $table->integer("d_20th")->nullable();
            $table->integer("d_20th_start")->nullable();
            $table->integer("d_20th_end")->nullable();
            $table->integer("d_21st")->nullable();
            $table->integer("d_21st_start")->nullable();
            $table->integer("d_21st_end")->nullable();
            $table->integer("d_22nd")->nullable();
            $table->integer("d_22nd_start")->nullable();
            $table->integer("d_22nd_end")->nullable();
            $table->integer("d_23rd")->nullable();
            $table->integer("d_23rd_start")->nullable();
            $table->integer("d_23rd_end")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
