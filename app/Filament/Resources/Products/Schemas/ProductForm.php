<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubTag;
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
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn(callable $set, $state) => $set('sub_category_id', null)),
                Select::make('sub_category_id')
                    ->label('Sub Category')
                    ->options(function (callable $get) {

                        return SubCategory::query()
                            ->where('category_id', $get('category_id'))
                            ->pluck('name', 'id');
                    })
                    ->disabled(fn($get) => !$get('category_id'))
                    ->searchable()
                    ->required(),

                Select::make('tag_id')
                    ->label('Tag')
                    ->options(Tag::pluck('name', 'id'))
                    ->searchable()
                    ->required()->reactive()
                    ->afterStateUpdated(fn(callable $set, $state) => $set('sub_tag_id', null)),

                Select::make('sub_tag_id')
                    ->label('Sub Tag')
                    ->options(function (callable $get) {

                        return SubTag::query()
                            ->where('tag_id', $get('tag_id'))
                            ->pluck('name', 'id');
                    })
                    ->disabled(fn($get) => !$get('tag_id'))
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
