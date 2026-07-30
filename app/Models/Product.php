<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'price',
        'whatsapp_cta_text',
        'image_path',
        'is_featured',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
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
