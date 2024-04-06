<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostComment extends Model
{
    use HasFactory;

    protected $table = 'post_comments';

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'belongs_to_post', 'post_uuid');
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'comment_author', 'user_uuid');
    }
}
