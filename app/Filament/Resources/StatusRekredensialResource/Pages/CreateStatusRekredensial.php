<?php

namespace App\Filament\Resources\StatusRekredensialResource\Pages;

use App\Filament\Resources\StatusRekredensialResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;

class CreateStatusRekredensial extends CreateRecord
{
    protected static string $resource = StatusRekredensialResource::class;

    public function getTitle(): string|Htmlable
    {
        return 'Tambah Status Rekredensial';
    }

    public function getBreadcrumbs(): array
    {
        return [
            'Status Rekredensial',
            'Tambah Data'
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
