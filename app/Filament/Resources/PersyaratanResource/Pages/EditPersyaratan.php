<?php

namespace App\Filament\Resources\PersyaratanResource\Pages;

use App\Filament\Resources\PersyaratanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPersyaratan extends EditRecord
{
    protected static string $resource = PersyaratanResource::class;

    public function getBreadcrumbs(): array
    {
        return [
            'Prasyarat',
            'Ubah Data'
        ];
    }

    protected function getRedirectUrl(): ?string
    {
        return $this->getResource()::getUrl('index');
    }
}
