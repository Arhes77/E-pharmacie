<?php

namespace App\Filament\Widgets;

use App\Models\Commande;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\LineChartWidget;

class CommandeChart extends LineChartWidget
{
    protected static ?string $heading = 'Chart';
    public ?string $filter = 'today';
    protected static ?string $pollingInterval = '4s';
    protected static ?string $maxHeight = '300px';
    protected function getHeading(): string
    {
        return 'INVENTAIRE DES COMMANDES';
    }

    protected function getData(): array
    {
        $activeFilter = $this->filter;
        $data = Trend::model(Commande::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();
     
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getFilters(): ?array
{
    return [
        'today' => 'Today',
        'week' => 'Last week',
        'month' => 'Last month',
        'year' => 'This year',
    ];
}
    
}
