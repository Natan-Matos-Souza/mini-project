<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserPermission extends Model
{
    use HasFactory;

    protected $table = 'user_permission';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_uuid', 'user_uuid');
    }

    public function permission(): BelongsTo
    {
        return $this->belongsTo(Permissions::class, 'permission_id', 'permission_id');
    }
}
