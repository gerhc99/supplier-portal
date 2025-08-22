<?php

namespace App\Filament\Resources\SupplierRecordResource\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\SupplierRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSupplierRecords extends ListRecords
{
    protected static string $resource = SupplierRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
