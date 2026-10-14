<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'whatsapp_cta_text',
        'is_active',
        'sort_order',
    ];

    public function portfolioItems(): HasMany
    {
        return $this->hasMany(PortfolioItem::class);
    }

    public function getTargetUrlAttribute(): string
    {
        $name = strtolower($this->name);
        if (str_contains($name, 'fumigat') || str_contains($name, 'pest')) {
            return route('services.cleaning') . '#industrial';
        }
        if (str_contains($name, 'laundry') || str_contains($name, 'dry clean')) {
            return route('services.cleaning') . '#specialized';
        }
        if (str_contains($name, 'garden') || str_contains($name, 'landscap')) {
            return route('services.cleaning') . '#environmental';
        }
        if (str_contains($name, 'clean')) {
            return route('services.cleaning');
        }
        if (str_contains($name, 'transport') || str_contains($name, 'logistic')) {
            return route('services.transport');
        }
        if (str_contains($name, 'food') || str_contains($name, 'cater')) {
            return route('services.fastfood');
        }
        if (str_contains($name, 'brand') || str_contains($name, 'print') || str_contains($name, 'fashion')) {
            return route('services.fashion');
        }
        if (str_contains($name, 'gadget') || str_contains($name, 'electronic') || str_contains($name, 'phone') || str_contains($name, 'mobile')) {
            return route('services.electronics');
        }

        return route('services');
    }

    public function getIconClassAttribute(): string
    {
        $name = strtolower($this->name);
        if (str_contains($name, 'fumigat') || str_contains($name, 'pest')) {
            return 'bi bi-shield-check text-brand-blue';
        }
        if (str_contains($name, 'laundry') || str_contains($name, 'dry clean')) {
            return 'bi bi-droplet-fill text-brand-red';
        }
        if (str_contains($name, 'garden') || str_contains($name, 'landscap')) {
            return 'bi bi-tree-fill text-emerald-600';
        }
        if (str_contains($name, 'clean')) {
            return 'bi bi-stars text-brand-red';
        }
        if (str_contains($name, 'transport') || str_contains($name, 'logistic')) {
            return 'bi bi-truck text-amber-600';
        }
        if (str_contains($name, 'food') || str_contains($name, 'cater')) {
            return 'bi bi-cup-hot-fill text-brand-red';
        }
        if (str_contains($name, 'brand') || str_contains($name, 'print') || str_contains($name, 'fashion')) {
            return 'bi bi-palette-fill text-brand-blue';
        }
        if (str_contains($name, 'gadget') || str_contains($name, 'electronic') || str_contains($name, 'phone') || str_contains($name, 'mobile')) {
            return 'bi bi-phone-fill text-purple-600';
        }

        return 'bi bi-briefcase text-brand-dark';
    }
}
