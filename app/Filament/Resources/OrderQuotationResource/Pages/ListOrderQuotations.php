<?php

namespace App\Filament\Resources\OrderQuotationResource\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\OrderQuotationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrderQuotations extends ListRecords
{
    protected static string $resource = OrderQuotationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
