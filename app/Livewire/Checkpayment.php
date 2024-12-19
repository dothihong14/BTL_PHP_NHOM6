<?php

namespace App\Livewire;

use App\Models\Booking;
use App\Models\Order;
use App\Models\Transaction;
use Livewire\Component;

class Checkpayment extends Component
{
    public function mount()
    {
        $params = request()->all();

        // Kiểm tra các tham số cần thiết
        if (!isset($params['vnp_TransactionStatus']) || !isset($params['vnp_TxnRef'])) {
            abort(400, 'Thiếu tham số cần thiết');
        }

        $transactionStatus = $params['vnp_TransactionStatus'];
        $txnRef = $params['vnp_TxnRef'];

        // Kiểm tra trạng thái giao dịch
        if ($transactionStatus == '00') {
            // Tìm booking theo mã
            $booking = Booking::find($txnRef);
            
            if ($booking) {
                // Cập nhật trạng thái booking
                $booking->update(['status' => 'paid']);

                // Hiển thị thông báo thành công
                session()->flash('message', 'Thanh toán thành công! Đơn hàng của bạn đã được cập nhật.');
        return redirect()->to('/success-page');

            } else {
                session()->flash('error', 'Không tìm thấy đơn hàng.');
            }
        } else {
            $booking = Booking::find($txnRef);
            $booking->update(['status' => 'cancelled']);
            session()->flash('error', 'Thanh toán thất bại hoặc bị hủy.');
        return redirect()->to('/cancel-page');

        }
    }

    public function render()
    {
        return view('livewire.check-payment');
    }
}
