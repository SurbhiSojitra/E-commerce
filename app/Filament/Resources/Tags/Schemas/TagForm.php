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

                TextInput::make('name')
                    ->required()
                    ->reactive()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, $set) {

                        // Replace spaces with hyphens
                        $slug = preg_replace('/\s+/u', '-', $state);

                        // Allow Gujarati + Hindi + English letters + numbers + hyphens
                        $slug = preg_replace('/[^\x{0A80}-\x{0AFF}\x{0900}-\x{097F}a-zA-Z0-9\-]/u', '', $slug);

                        // Remove multiple hyphens
                        $slug = preg_replace('/-+/u', '-', $slug);

                        // Trim hyphens
                        $slug = trim($slug, '-');

                        $set('slug', $slug);
                    }),


                TextInput::make('slug')
                    ->label('Slug')
                    ->hidden()
                    ->dehydrated(false)
                    ->unique(ignoreRecord: true),
            ]);
    }
}
