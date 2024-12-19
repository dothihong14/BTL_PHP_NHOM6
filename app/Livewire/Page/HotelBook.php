<?php

namespace App\Livewire\Page;

use Livewire\Component;
use App\Models\Hotel; 
use App\Models\Room; 
use App\Models\Booking; // Import mô hình Booking
use App\Models\BookingDetail;
use Carbon\Carbon;
use DateTime;

class HotelBook extends Component
{
    public $hotel; 
    public $rooms; 
    public $dateFrom; 
    public $dateTo; 
    public $totalNights; 
    public $totalPrice; 
    public $selectedRooms = []; 
    public $first_name; // Thêm thuộc tính cho first name
    public $last_name; // Thêm thuộc tính cho last name
    public $email; // Thêm thuộc tính cho email
    public $street; // Thêm thuộc tính cho street
    public $city; // Thêm thuộc tính cho city
    public $zip_code; // Thêm thuộc tính cho zip code
    public $country; // Thêm thuộc tính cho country
    public $message; // Thêm thuộc tính cho message
    public $payment_method; // Thêm thuộc tính cho message
    public $hotel_id; // Thêm thuộc tính cho message

    public function mount($hotelId)
    {
        // Lấy thông tin khách sạn theo ID
        $this->hotel = Hotel::find($hotelId);
        $this->hotel_id =  $hotelId;
        $this->dateFrom = request()->query('date_from');
        $this->dateTo = request()->query('date_to');
        $this->selectedRooms = request()->query('room', []);
        $roomIds = array_keys($this->selectedRooms);
        $this->rooms = Room::where('hotel_id', $hotelId)->whereIn('id', $roomIds)->get();

        if ($this->dateFrom && $this->dateTo) {
            $this->calculateNightsAndPrice();
        }
    }

    public function updatedSelectedRooms()
    {
        $this->calculateNightsAndPrice();
    }

    private function calculateNightsAndPrice()
    {
        if ($this->dateFrom && $this->dateTo) {
            $checkIn = Carbon::parse($this->dateFrom);
            $checkOut = Carbon::parse($this->dateTo);
            $this->totalNights = $checkIn->diffInDays($checkOut);
            $this->totalPrice = 0;

            foreach ($this->selectedRooms as $roomId => $quantity) {
                $room = Room::find($roomId);
                if ($room) {
                    $this->totalPrice += $room->price * $quantity * $this->totalNights;
                }
            }
        } else {
            $this->totalNights = 0;
            $this->totalPrice = 0;
        }
    }

    public function placeOrder()
    {
        // Validate the input data
        $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'country' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);
    
        // Tạo một booking mới
        $booking = Booking::create([
            'user_id' => auth()->id(),
            'status' => 'pending',
            'total_price' => $this->totalPrice,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'hotel_id' => $this->hotel_id,
            'street' => $this->street,
            'city' => $this->city,
            'zip_code' => $this->zip_code,
            'country' => $this->country,
            'message' => $this->message,
            'payment_method' => $this->payment_method,
        ]);
    
        $checkInDate = DateTime::createFromFormat('D, M d Y', $this->dateFrom)->format('Y-m-d');
        $checkOutDate = DateTime::createFromFormat('D, M d Y', $this->dateTo)->format('Y-m-d');
    
        // Thêm thông tin chi tiết đặt phòng
        foreach ($this->selectedRooms as $roomId => $quantity) {
            BookingDetail::create([
                'booking_id' => $booking->id,
                'room_id' => $roomId,
                'quantity' => $quantity,
                'subtotal' => $this->getRoomPrice($roomId) * $quantity * $this->totalNights,
                'check_in_date' => $checkInDate,
                'check_out_date' => $checkOutDate,
                'price' => $this->getRoomPrice($roomId),
                'price_per_night' => $this->getRoomPrice($roomId),
                'number_of_nights' => $this->totalNights,
            ]);
        }
    
        // Kiểm tra phương thức thanh toán
        if ($this->payment_method === 'vnpay') {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
        
            // Cấu hình VNPAY
            $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            $vnp_Returnurl = "http://localhost:8000/checkpayment";
            $vnp_TmnCode = "R3E63P5P"; // Mã website tại VNPAY
            $vnp_HashSecret = "GXDEHIEBSREFTEALNKYBXMKDKVVBEJPC"; // Chuỗi bí mật
        
            // Tạo mã đơn hàng
            $vnp_TxnRef = $booking->id;
        
            // Dữ liệu đầu vào
            $vnp_OrderInfo = $booking->address_rdo . '_' . $booking->voucher . '_' . $booking->customer_id . '_' . $booking->voucher_id;
            $vnp_OrderType = 'billpayment';
            $vnp_Amount = $this->totalPrice * 100; // Số tiền (VND)
            $vnp_Locale = 'vn';
            $vnp_BankCode = 'NCB'; // Ngân hàng mặc định
            $vnp_IpAddr = $_SERVER['REMOTE_ADDR']; // Lấy địa chỉ IP thực
        
            // Tạo mảng dữ liệu đầu vào
            $inputData = [
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => now()->format('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef
            ];
        
            // Thêm thông tin ngân hàng nếu có
            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
            if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
                $inputData['vnp_Bill_State'] = $vnp_Bill_State;
            }
        
            // Sắp xếp dữ liệu theo key
            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }
            
            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            }
            $returnData = array('code' => '00'
                , 'message' => 'success'
                , 'data' => $vnp_Url);
                if (true) {
                    return redirect()->away($vnp_Url);

                    die();
                } else {
                    echo json_encode($returnData);
                }
        
            // Kiểm tra URL đã tạo
        
            // Chuyển hướng đến VNPAY
        }
        
        
    
        // Nếu thanh toán bằng tiền mặt
        session()->flash('message', 'Đặt phòng thành công!');
        return redirect()->to('/success-page');
    }
    
    
    
    
    // Phương thức để lấy giá phòng
    private function getRoomPrice($roomId)
    {
        // Giả định bạn có mô hình Room và có thể lấy giá như sau:
        $room = Room::find($roomId);
        return $room ? $room->price : 0; // Trả về giá phòng, hoặc 0 nếu không tìm thấy
    }
    

    public function render()
    {
        return view('livewire.page.hotel-book');
    }
}
