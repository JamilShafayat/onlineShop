<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('restrict');
            $table->foreignId('supplier_id')->nullable()->references('id')->on('users')->onDelete('restrict');
            $table->string('title',128)->unique();
            $table->string('slug',128)->unique();
            $table->string('brand',32)->nullable();
            $table->string('image',128)->nullable();
            $table->decimal('brought_price', 8, 2);
            $table->decimal('sale_price', 8, 2);
            $table->decimal('offer_price', 8, 2)->nullable();
            $table->longText('description')->nullable();
            $table->decimal('quantity', 8, 2);
            $table->string('unit',32)->nullable();
            $table->tinyInteger('in_stock')->default(true);
            $table->tinyInteger('status')->default(1)->comment('1=active and 0=inactive');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
