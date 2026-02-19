<?php

namespace App\Filament\Resources\SubTags\Pages;

use App\Filament\Resources\SubTags\SubTagResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSubTags extends ListRecords
{
    protected static string $resource = SubTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
