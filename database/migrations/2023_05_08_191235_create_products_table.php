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
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('main_image')->nullable();
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('taxs')->nullable();
            $table->string('tags')->nullable();
            $table->string('category_id')->nullable();
            $table->string('sub_category_id')->nullable();
            $table->string('child_category_id')->nullable();
            $table->integer('hot_deals')->default(0);
            $table->integer('special_offer')->default(0);
            $table->integer('special_deals')->default(0);
            $table->integer('featured')->default(0);
            $table->integer('new_product')->default(0);
            $table->integer('quantity')->default(1);
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
