<?php

namespace App\Filament\Resources\StatusRekredensialResource\Pages;

use App\Filament\Resources\StatusRekredensialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatusRekredensials extends ListRecords
{
    protected static string $resource = StatusRekredensialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Data'),
        ];
    }

    public function getBreadcrumbs(): array
    {
        return [
            'Status Rekredensial',
        ];
    }
}
