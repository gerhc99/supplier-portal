<?php

namespace App\Filament\Resources\InvoicesResource\Widgets;

use App\Models\Invoice;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class InvoiceTypeOverview3 extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Cats', Invoice::query()->where('uuid', '1')->count()),
            Stat::make('Dogs', Invoice::query()->where('uuid', '1')->count()),
            Stat::make('Rabbits', Invoice::query()->where('invoice_no', '1')->count()),
        ];
    }
}
