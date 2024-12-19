<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Filament\Widgets\BarChartWidget;
use Carbon\Carbon;

class BookingCountMonthlyChart extends BarChartWidget
{
    protected static ?string $heading = 'Biểu đồ Số Lượng Đặt Phòng Theo Tháng';
    protected static ?int $sort = 6; // Sắp xếp widget

    // Mặc định là 'this_year'
    public ?string $filter = 'this_year';

    // Định nghĩa các bộ lọc cho widget
    protected function getFilters(): array
    {
        return [
            'this_year' => 'Năm này',
            'last_year' => 'Năm trước',
        ];
    }

    protected function getData(): array
    {
        // Xử lý thời gian dựa vào bộ lọc đã chọn
        switch ($this->filter) {
            case 'last_year':
                $startDate = Carbon::now()->subYear()->startOfYear();
                $endDate = Carbon::now()->subYear()->endOfYear();
                break;
            case 'this_year':
            default:
                $startDate = Carbon::now()->startOfYear();
                $endDate = Carbon::now()->endOfYear();
        }

        // Đếm số lượng đặt phòng theo từng tháng trong khoảng thời gian đã chọn
        $bookingData = Booking::whereBetween('created_at', [$startDate, $endDate])
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Tạo dữ liệu cho biểu đồ
        $months = range(1, 12);
        $data = array_fill(0, 12, 0); // Khởi tạo mảng với 12 tháng

        foreach ($bookingData as $booking) {
            $data[$booking->month - 1] = $booking->count; // Lưu số lượng vào tháng tương ứng
        }

        return [
            'datasets' => [
                [
                    'label' => 'Số lượng đặt phòng',
                    'data' => $data,
                ],
            ],
            'labels' => array_map(function ($month) {
                return Carbon::create()->month($month)->format('F'); // Đổi số thành tên tháng
            }, $months),
        ];
    }

    // Cập nhật khi bộ lọc thay đổi
    public function updatedFilter($filter)
    {
        $this->filter = $filter;
    }
}
