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
        Schema::create('commanders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("mecaniciens_id")->constrained()->onDelete("cascade");
            $table->foreignId("pieces_id")->constrained()->onDelete("cascade");
            $table->decimal("quantite",9,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commanders');
    }
};
