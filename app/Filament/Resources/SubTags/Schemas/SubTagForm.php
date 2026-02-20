<?php

namespace App\Filament\Resources\SubTags\Schemas;

use App\Models\Tag;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SubTagForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('tag_id')
                    ->label('Tag')
                    ->options(function () {
                        return Tag::with('subCategory.category')
                            ->get()
                            ->mapWithKeys(function ($sub) {
                                return [
                                    $sub->id => $sub->subCategory->category->name . ' → ' . $sub->name,
                                ];
                            });
                    })
                    ->required(),
                TextInput::make('name')
                    ->required(),
            ]);
    }
}
