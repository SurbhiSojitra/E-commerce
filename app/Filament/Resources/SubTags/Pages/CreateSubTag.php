<?php

namespace App\Filament\Resources\SubTags\Pages;

use App\Filament\Resources\SubTags\SubTagResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSubTag extends CreateRecord
{
    protected static string $resource = SubTagResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    public function getCreatedNotificationTitle(): ?string
    {
        return 'Sub_tags Created';
    }
}
