<?php

namespace App\Filament\Resources\RekredensialingResource\Pages;

use App\Filament\Resources\RekredensialingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRekredensialing extends EditRecord
{
    protected static string $resource = RekredensialingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
