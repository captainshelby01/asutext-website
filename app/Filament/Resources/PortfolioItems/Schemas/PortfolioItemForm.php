<?php

namespace App\Filament\Resources\PortfolioItems\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PortfolioItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('service_id')
                    ->relationship('service', 'name')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                Select::make('media_type')
                    ->options([
                        'image' => 'Image',
                        'video' => 'Video',
                    ])
                    ->required()
                    ->default('image'),
                FileUpload::make('media_path')
                    ->label('Upload File')
                    ->directory('portfolio')
                    ->preserveFilenames()
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
