<?php

namespace App\Filament\Resources\DashboardResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserCountWidget extends BaseWidget
{
    protected static ?string $heading = 'Số lượng Khách Hàng';

    protected function getStats(): array
    {
        return [
            Stat::make('Tổng Số Khách Hàng', User::count())
                ->color('primary'),
        ];
    }
}
