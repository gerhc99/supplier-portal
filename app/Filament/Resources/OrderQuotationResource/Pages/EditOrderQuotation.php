<?php

namespace App\Filament\Resources\OrderQuotationResource\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Resources\OrderQuotationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrderQuotation extends EditRecord
{
    protected static string $resource = OrderQuotationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
