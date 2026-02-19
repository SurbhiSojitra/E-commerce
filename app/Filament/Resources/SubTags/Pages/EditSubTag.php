<?php

namespace App\Filament\Resources\SubTags\Pages;

use App\Filament\Resources\SubTags\SubTagResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSubTag extends EditRecord
{
    protected static string $resource = SubTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    public function getCreatedNotificationTitle(): ?string
    {
        return 'Sub_tags Updated';
    }
}
