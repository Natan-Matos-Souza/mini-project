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
        Schema::create('post_comments', function (Blueprint $table) {
            $table->uuid('comment_uuid')->primary();
            $table->uuid('comment_author');
            $table->uuid('belongs_to_post');
            $table->timestamp('created_at')->default(DB::raw('now()'));
            $table->string('comment');

            $table->foreign('belongs_to_post')->references('post_uuid')->on('posts')->cascadeOnDelete();
            $table->foreign('comment_author')->references('user_uuid')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_comments');
    }
};
