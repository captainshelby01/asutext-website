<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PortfolioItem extends Model
{
    protected $fillable = [
        'service_id',
        'title',
        'media_type',
        'media_path',
        'sort_order',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function getMediaUrlAttribute(): string
    {
        if (empty($this->media_path)) {
            return asset('Images/logo.jpeg');
        }

        if (file_exists(public_path('storage/' . $this->media_path))) {
            return asset('storage/' . $this->media_path);
        }

        if (file_exists(public_path('Images/' . $this->media_path))) {
            return asset('Images/' . $this->media_path);
        }

        return asset('storage/' . $this->media_path);
    }
}
