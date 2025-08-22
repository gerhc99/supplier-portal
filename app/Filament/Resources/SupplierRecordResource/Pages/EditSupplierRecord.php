<?php

namespace App\Filament\Resources\SupplierRecordResource\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Resources\SupplierRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSupplierRecord extends EditRecord
{
    protected static string $resource = SupplierRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
