<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('distributor_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->string('customer_name', 64)->nullable();
            $table->string('customer_phone_number', 32)->nullable();
            $table->string('address', 32)->nullable();
            $table->string('city', 32)->nullable();
            $table->string('postal_code', 32)->nullable();
            $table->decimal('total_amount', 10, 2);
            $table->decimal('discount_amount', 10, 2)->default(0.00);
            $table->decimal('paid_amount', 10, 2);
            $table->text('payment_details')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1=active and 0=inactive');
            $table->tinyInteger('payment_status')->default(0)->comment('1=active and 0=pending');
            $table->tinyInteger('operational_status')->default(0)->comment('1=active and 0=pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
}
