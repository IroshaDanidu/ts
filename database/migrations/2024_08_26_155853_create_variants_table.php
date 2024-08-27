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
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('product_id')->constrained('products')->onUpdate('cascade')->onDelete('cascade');
            //sku
            $table->string('sku')->unique();
            //mrp
            $table->double('mrp');
            //selling_price
            $table->double('selling_price');
            //stock
            $table->integer('stock')->default(0);
            //quantity
            $table->integer('quantity')->default(0);
            //sort_order
            $table->integer('sort_order')->default(0);
            //ads
            $table->boolean('ads')->default(false);
            //popular products
            $table->boolean('popular')->default(false);
            //best selling products
            $table->boolean('best_selling')->default(false);
            //tranding products
            $table->boolean('trending')->default(false);
            //featured products
            $table->boolean('featured')->default(false);
            //special offer
            $table->boolean('special_offer')->default(false);
            //best seller products
            $table->boolean('best_seller')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variants');
    }
};
