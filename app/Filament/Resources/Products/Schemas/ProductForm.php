<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Category;
use App\Models\Tag;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Pest\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->maxLength('255')->required(),
                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->required(),
                Select::make('sub_category_id')
                    ->label('Sub Category')
                    ->relationship('sub_category', 'name')
                    ->required(),
                Select::make('tag_id')
                    ->label('Tag')
                    ->options(Tag::pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                TextInput::make('sku')
                    ->label('SKU')
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->default(fn() => 'SKU-' . strtoupper(Str::random(6)))
                    ->reactive(),
                TextInput::make('qty')
                    ->label('Quantity')
                    ->required()
                    ->numeric(),
                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->preserveFilenames()
                    ->disk('public')
                    ->directory('product'),

                TextInput::make('price')
                    ->label('Price')
                    ->required(),
            ]);
    }
}
