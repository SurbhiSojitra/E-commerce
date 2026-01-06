<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->label('Name')->searchable(),
                TextColumn::make('category.name')
                    ->label('Category'),

                TextColumn::make('sub_category.name')
                    ->label('Sub Category'),

                ImageColumn::make('image')
                    ->height(60)
                    ->width(60)
                    ->getStateUsing(fn($record) => asset('storage/' . $record->image)),

                TextColumn::make('tag.name')->label('Tag')->searchable(),
                TextColumn::make('qty')->label('Quantity'),
                TextColumn::make('sku')->label('SKU'),
                TextColumn::make('price')->label('Price'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
