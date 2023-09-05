<?php

use App\Models\About;
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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('choose_us');
            $table->string('choose_us_image');
            $table->string('mission');
            $table->string('mission_image');
            $table->string('vision');
            $table->string('vision_image');
            $table->string('project_completed');
            $table->string('ongogin_project');
            $table->string('employe');
            $table->string('experiance');
            $table->timestamps();
            $table->softDeletes();
        });
        // $about = new About();
        // $about->choose_us = '';
        // $about->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
