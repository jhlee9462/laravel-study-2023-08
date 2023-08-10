<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function profileImage(): string
    {
        $imagePath = $this->image ? $this->image : 'profile/1oJrWDzaO8b8V4GHScjDcp1wYcUfGQLgb2GJeIh1.jpg';
        return '/storage/' . $imagePath;
    }
    public function followers(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
