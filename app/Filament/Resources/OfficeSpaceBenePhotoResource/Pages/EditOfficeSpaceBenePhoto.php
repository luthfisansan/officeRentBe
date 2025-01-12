<?php

namespace App\Filament\Resources\OfficeSpaceBenePhotoResource\Pages;

use App\Filament\Resources\OfficeSpaceBenePhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOfficeSpaceBenePhoto extends EditRecord
{
    protected static string $resource = OfficeSpaceBenePhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
