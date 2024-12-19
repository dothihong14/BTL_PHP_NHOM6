<?php

namespace App\Filament\Resources\DashboardResource\Widgets;

use App\Models\Hotel;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class HotelCountWidget extends BaseWidget
{
    protected static ?string $heading = 'Số lượng Khách Sạn';

    protected function getStats(): array
    {
        return [
            Stat::make('Tổng Số Khách Sạn', Hotel::count())
                ->color('success'),
        ];
    }
}
