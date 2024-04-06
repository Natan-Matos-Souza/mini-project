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
        Schema::create('users_like_post', function (Blueprint $table) {
            $table->uuid('user');
            $table->uuid('post');

            $table->foreign('user')->references('user_uuid')->on('users')->cascadeOnDelete();
            $table->foreign('post')->references('post_uuid')->on('posts')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_like_post');
    }
};
