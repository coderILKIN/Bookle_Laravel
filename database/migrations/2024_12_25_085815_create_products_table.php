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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('price')->nullable();
            $table->string('sku')->nullable();
            $table->string('tags')->nullable();
            $table->string('total_page')->nullable();
            $table->string('publish_years')->nullable();
            $table->string('format')->nullable();
            $table->string('language')->nullable();
            $table->string('country')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('weight')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
