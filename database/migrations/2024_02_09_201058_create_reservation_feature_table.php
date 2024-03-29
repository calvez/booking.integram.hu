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
        Schema::create('reservation_feature', function (Blueprint $table) {
            $table->foreignId('reservation_id');
            $table->foreignId('feature_id');
            $table->datetime('time');
            $table->primary(['reservation_id', 'feature_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_feature');
    }
};
