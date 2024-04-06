<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserLikesPost extends Model
{
    use HasFactory;
    protected $table = 'users_like_post';

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post', 'post_uuid');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user', 'user_uuid');
    }
}
