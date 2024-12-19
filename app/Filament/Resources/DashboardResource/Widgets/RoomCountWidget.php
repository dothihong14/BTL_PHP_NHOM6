<?php

namespace App\Filament\Resources\DashboardResource\Widgets;

use App\Models\Room;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class RoomCountWidget extends BaseWidget
{
    protected static ?string $heading = 'Số lượng Phòng';
    protected int | string | array $columnSpan = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Tổng Số Phòng', Room::count())
                ->color('info'),
        ];
    }
}
