<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'posts';

    protected $fillable = [
        'post_title',
        'post_title',
        'post_content',
        'post_author'
    ];

    public function usesUniqueIds(): array
    {
        return [
            'post_uuid'
        ];
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'post_author', 'user_uuid');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(PostComment::class, 'belongs_to_post');
    }
}