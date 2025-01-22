<?php

namespace App\Filament\Resources\PersyaratanResource\Pages;

use App\Filament\Resources\PersyaratanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;

class CreatePersyaratan extends CreateRecord
{
    protected static string $resource = PersyaratanResource::class;

    public function getTitle(): string|Htmlable
    {
        return 'Tambah Prasyarat';
    }

    public function getBreadcrumbs(): array
    {
        return [
            'Prasyarat',
            'Tambah Data'
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
