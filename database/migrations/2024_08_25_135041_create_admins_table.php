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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->string('phone')->nullable()->unique();
            $table->text('address')->nullable();
            $table->string('role')->default('admin');
            $table->string('status')->default('1');
            $table->timestamp('last_seen')->nullable();
            $table->timestamp('last_change_password')->nullable();
            $table->rememberToken();
            $table->integer('approved_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
