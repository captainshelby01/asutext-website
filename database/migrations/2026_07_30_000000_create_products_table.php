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
            $table->string('name');
            $table->string('category'); // e.g., 'Branding & Printing', 'Mobile Accessories & Gadgets', 'Fashion & Tailoring', 'Fast Food & Catering'
            $table->text('description')->nullable();
            $table->string('price')->nullable(); // e.g. "₦15,000" or null
            $table->string('whatsapp_cta_text')->nullable(); // custom WhatsApp inquiry message
            $table->string('image_path')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
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
