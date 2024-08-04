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
        Schema::create('minutesofmeeting', function (Blueprint $table) {
            $table->id();
            $table->string('meeting_name');
            $table->string('description');
            $table->date('meeting_date');
            $table->time('meeting_time');
            $table->string('status');
            $table->string('summary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minutesofmeeting');
    }
};
