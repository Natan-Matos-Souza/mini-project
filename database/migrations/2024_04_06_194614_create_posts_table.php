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
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('post_uuid')->primary();
            $table->timestamp('post_created_at')->default(DB::raw('now()'));
            $table->timestamp('post_edited_at')->nullable();
            $table->string('post_title', 100);
            $table->text('post_content');
            $table->uuid('post_author');

            $table->foreign('post_author')->references('user_uuid')->on('users')->cascadeOnDelete();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
