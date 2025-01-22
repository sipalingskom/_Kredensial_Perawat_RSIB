<?php

namespace App\Filament\Resources\StatusRekredensialResource\Pages;

use App\Filament\Resources\StatusRekredensialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStatusRekredensial extends EditRecord
{
    protected static string $resource = StatusRekredensialResource::class;

    public function getBreadcrumbs(): array
    {
        return [
            'Status Rekredensial',
            'Ubah Data'
        ];
    }

    protected function getRedirectUrl(): ?string
    {
        return $this->getResource()::getUrl('index');
    }
}
