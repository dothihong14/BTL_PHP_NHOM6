<?php

namespace App\Filament\Resources\DashboardResource\Widgets;

use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookingCountWidget extends BaseWidget
{
    protected static ?string $heading = 'Thống kê tổng hợp';

    protected int | string | array $columnSpan = 'full'; // Đặt cột trải rộng toàn bộ chiều rộng

    protected function getStats(): array
    {
        return [
            Stat::make('Tổng Số Đặt Phòng', Booking::count())
                ->color('warning'),
            Stat::make('Tổng Số Khách Sạn', Hotel::count())
                ->color('success'),
            Stat::make('Tổng Số Phòng', Room::count())
                ->color('info'),
            Stat::make('Tổng Số Khách Hàng', User::count())
                ->color('primary'),
        ];
    }
}
