<?php

use App\Models\House;
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
        Schema::create(
            'reservations',
            function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(House::class)->constrained()->cascadeOnDelete();
                $table->string('name', 100)->nullable()->default('text');
                $table->string('phone', 100)->nullable()->default('text');
                $table->string('email', 100)->nullable()->default('text');
                $table->datetime('start_date');
                $table->datetime('end_date');
                $table->string('postcode')->nullable()->default('text');
                $table->string('city')->nullable()->default('text');
                $table->string('address')->nullable()->default('text');
                $table->string('hsz', 100)->nullable()->default('text');
                $table->string('hash', 100)->nullable()->default(null);
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
