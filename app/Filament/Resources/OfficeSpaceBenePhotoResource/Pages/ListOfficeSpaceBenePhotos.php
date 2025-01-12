<?php

namespace App\Filament\Resources\OfficeSpaceBenePhotoResource\Pages;

use App\Filament\Resources\OfficeSpaceBenePhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOfficeSpaceBenePhotos extends ListRecords
{
    protected static string $resource = OfficeSpaceBenePhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
