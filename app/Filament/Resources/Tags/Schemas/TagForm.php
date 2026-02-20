<?php

namespace App\Filament\Resources\Tags\Schemas;

use App\Models\SubCategory;
use Dom\Text;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TagForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // Select::make('sub_category_id')
                //     ->label('Sub Category')
                //     ->relationship('subCategory', 'name')
                //     ->searchable()
                //     ->preload()
                //     ->required(),

                Select::make('sub_category_id')
                    ->label('Sub Category')
                    ->options(function () {
                        return SubCategory::with('category')
                            ->get()
                            ->mapWithKeys(function ($sub) {
                                return [
                                    $sub->id => $sub->category->name . ' → ' . $sub->name,
                                ];
                            });
                    })
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('name')->required(),
            ]);
    }
}
