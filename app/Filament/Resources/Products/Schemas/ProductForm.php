<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Select::make('category')
                    ->options([
                        'Branding & Printing' => 'Branding & Printing',
                        'Mobile Accessories & Gadgets' => 'Mobile Accessories & Gadgets',
                        'Fashion & Bespoke Wear' => 'Fashion & Bespoke Wear',
                        'Fast Food & Catering' => 'Fast Food & Catering',
                    ])
                    ->required(),
                TextInput::make('price')
                    ->placeholder('e.g. ₦15,000 or Custom Quote'),
                TextInput::make('whatsapp_cta_text')
                    ->label('Custom WhatsApp Message')
                    ->placeholder('e.g. Hi, I am interested in bulk ordering this product...')
                    ->columnSpanFull(),
                FileUpload::make('image_path')
                    ->label('Product Image')
                    ->directory('products')
                    ->image()
                    ->required(),
                Textarea::make('description')
                    ->rows(4)
                    ->columnSpanFull(),
                Toggle::make('is_featured')
                    ->default(false),
                Toggle::make('is_active')
                    ->default(true),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
