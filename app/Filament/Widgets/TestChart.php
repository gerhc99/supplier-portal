<?php

namespace App\Filament\Widgets;

use App\Models\Invoice;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

use Filament\Widgets\ChartWidget;

class TestChart extends ChartWidget
{
    protected ?string $heading = 'Chart';

    protected function getData(): array
    {
        $data = Trend::model(Invoice::class)
        ->between(
            start: now()->subYear(),
            end: now(),
        )
        ->perMonth()
        ->count();

    return [
        'datasets' => [
            [
                'label' => 'Invoices',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];
    }

    protected function getType(): string
    {
        return 'bubble';
    }
}
