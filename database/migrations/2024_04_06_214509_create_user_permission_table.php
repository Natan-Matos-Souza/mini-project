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
        Schema::create('user_permission', function (Blueprint $table) {
            $table->uuid('user_uuid');
            $table->integer('permission_id');

            $table->foreign('user_uuid')->references('user_uuid')->on('users')->cascadeOnDelete();
            $table->foreign('permission_id')->references('permission_id')->on('permissions')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_permission');
    }
};
