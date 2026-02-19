<?php

namespace App\Filament\Resources\SubTags\Schemas;

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
                    ->relationship('tag', 'name')
                    ->required(),

                TextInput::make('name')
                    ->required(),
            ]);
    }
}
