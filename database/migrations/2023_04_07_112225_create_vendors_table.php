<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('vendor_join')->nullable();
            $table->string('vendor_short_info')->nullable();
            $table->string('role')->default('vendor'); // Remove the array syntax for 'role'
            $table->enum('status', ['active', 'inactive'])->default('active'); // Use enum() for 'status'
            $table->integer('delete_status')->default(1); // Use integer for 'delete_status'
            $table->rememberToken()->nullable();
            $table->date('last_login');
            $table->string('auth_token')->nullable();
            $table->date('token_expired_at');
            $table->date('expired_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
};
