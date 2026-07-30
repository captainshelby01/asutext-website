<?php

namespace App\Filament\Resources\PortfolioItems;

use App\Filament\Resources\PortfolioItems\Pages\CreatePortfolioItem;
use App\Filament\Resources\PortfolioItems\Pages\EditPortfolioItem;
use App\Filament\Resources\PortfolioItems\Pages\ListPortfolioItems;
use App\Filament\Resources\PortfolioItems\Schemas\PortfolioItemForm;
use App\Filament\Resources\PortfolioItems\Tables\PortfolioItemsTable;
use App\Models\PortfolioItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PortfolioItemResource extends Resource
{
    protected static ?string $model = PortfolioItem::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-photo';

    protected static string|\UnitEnum|null $navigationGroup = 'Content';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Work Gallery';

    protected static ?string $modelLabel = 'Gallery Item';

    protected static ?string $pluralModelLabel = 'Gallery Items';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return PortfolioItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PortfolioItemsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPortfolioItems::route('/'),
            'create' => CreatePortfolioItem::route('/create'),
            'edit' => EditPortfolioItem::route('/{record}/edit'),
        ];
    }
}
