<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_id')->nullable()->references('id')->on('areas')->onDelete('restrict');
            $table->foreignId('user_type_id')->references('id')->on('user_types')->onDelete('restrict');
            $table->string('first_name',64)->nullable();
            $table->string('last_name',64)->nullable();
            $table->string('user_name',64)->unique();
            $table->string('phone_no',32)->nullable();
            $table->string('email',64)->unique();
            $table->string('password',128);
            $table->string('image',128)->nullable();
            $table->string('nid',128)->nullable();
            $table->dateTime('birth_date')->nullable();
            $table->string('address',128)->nullable();
            $table->string('guardian_name',128)->nullable();
            $table->string('guardian_phone',128)->nullable();
            $table->tinyInteger('status')->default(1)->comment('1=active and 0=inactive');
            $table->date('email_verified_at')->nullable();
            $table->string('email_verification_token',128)->nullable();
            $table->string('facebook_id',64)->nullable();
            $table->string('google_id',64)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
