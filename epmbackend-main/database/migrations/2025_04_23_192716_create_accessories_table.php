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
        Schema::create('accessories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('brand_name');
            $table->string('vendor_name')->nullable();
            $table->date('purchase_date')->nullable();
            $table->decimal('purchase_amount', 10, 2)->nullable();
            $table->integer('warranty_months')->nullable();
            $table->string('images')->nullable();
            $table->string('condition')->default('good');
            $table->integer('stock_quantity')->default(0);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessories');
    }
};
