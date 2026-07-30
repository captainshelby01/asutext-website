<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'name',
        'role',
        'bio',
        'image_path',
        'sort_order',
    ];

    public function getImageUrlAttribute(): string
    {
        if (empty($this->image_path)) {
            return asset('Images/logo.jpeg');
        }

        if (file_exists(public_path('storage/' . $this->image_path))) {
            return asset('storage/' . $this->image_path);
        }

        if (file_exists(public_path('Images/' . $this->image_path))) {
            return asset('Images/' . $this->image_path);
        }

        return asset('storage/' . $this->image_path);
    }
}
