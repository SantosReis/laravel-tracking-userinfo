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
        Schema::create('tracking_info', function (Blueprint $table) {
            $table->id();
            $table->string('internal_client');
            $table->string('client');
            $table->string('module');
            $table->string('language');
            $table->string('url');
            $table->string('width');
            $table->string('height');
            $table->string('browser');
            $table->string('browser_version');
            $table->boolean('java');
            $table->boolean('mobile');
            $table->string('os');
            $table->string('osversion');
            $table->boolean('cookies');
            $table->string('track');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracking_infos');
    }
};
