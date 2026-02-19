<?php

namespace App\Filament\Resources\SubTags;

use App\Filament\Resources\SubTags\Pages\CreateSubTag;
use App\Filament\Resources\SubTags\Pages\EditSubTag;
use App\Filament\Resources\SubTags\Pages\ListSubTags;
use App\Filament\Resources\SubTags\Schemas\SubTagForm;
use App\Filament\Resources\SubTags\Tables\SubTagsTable;
use App\Models\SubTag;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SubTagResource extends Resource
{
    protected static ?string $model = SubTag::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'SubTag';

    public static function form(Schema $schema): Schema
    {
        return SubTagForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SubTagsTable::configure($table);
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
            'index' => ListSubTags::route('/'),
            'create' => CreateSubTag::route('/create'),
            'edit' => EditSubTag::route('/{record}/edit'),
        ];
    }
}
