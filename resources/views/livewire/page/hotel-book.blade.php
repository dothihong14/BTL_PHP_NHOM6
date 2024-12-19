<div>
    <!DOCTYPE html>
    <html class="no-js" lang="en">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Looking for something amazing?">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="HandheldFriendly" content="True">
        <title>Your Travel World </title>
        <!-- Edge and IE-->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- Add to homescreen for Chrome on Android-->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="Looking for something amazing?">
        <link rel="icon" sizes="192x192" href="img/touch/chrome-touch-icon-192x192.png">
        <!-- Add to homescreen for Safari on iOS-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Your Travel World">
        <link rel="apple-touch-icon" href="img/touch/apple-touch-icon.png">
        <!-- Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700%7CPoppins:400,500,600,700" rel="stylesheet">
       
      </head>
      <body class="load">
        <div class="progress-load js-progress-load"></div>
        <div class="demo-panel bx4dp d-none d-sm-block" id="demoSwitcher">
          <div class="container">
            <div class="demo-panel__toggle btn btn-light text-primary shadow-sm js-panel-toggle"><i class="fa fa-cog"></i></div>
          </div>
          <div class="demo-panel__content bg-light pt-3">
            <div class="container">
              <div class="row flex-nowrap">
                <div class="col-auto mb-2 d-flex align-items-center">
                  <h4>Colors</h4>
                  <div class="demo-panel__colors nav"><a class="nav-link js-toggle-theme is-active" href="#" data-path="skins/style-default.css" role="button"></a><a class="nav-link js-toggle-theme" href="#" data-path="skins/style-orange.css" role="button"></a><a class="nav-link js-toggle-theme" href="#" data-path="skins/style-green.css" role="button"></a><a class="nav-link js-toggle-theme" href="#" data-path="skins/style-red.css" role="button"></a><a class="nav-link js-toggle-theme" href="#" data-path="skins/style-purple.css" role="button"></a><a class="nav-link js-toggle-theme" href="#" data-path="skins/style-pink.css" role="button"></a>
                  </div>
                </div>
                <div class="col-auto mb-2 d-flex align-items-center">
                  <h4>RTL</h4>
                  <button class="btn-switch text-primary js-switch-rtl" type="button" data-switch="css/bootstrap-rtl.min.css"><span class="bar bg-primary"></span><span class="toggle bg-secondary"></span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
     
      
        <main class="page-main">
          <nav class="breadcrumb-nav d-flex align-items-center" aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="under" href="{{ route('home') }}">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="under" href="{{ route('hotels') }}">Khách sạn</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span>{{ $hotel->name ?? 'Chi tiết khách sạn' }}</span>
                    </li>
                </ol>
            </div>
        </nav>
        
          <div class="page-content">
            <div class="container">
              <div class="row">
                <aside class="sidebar col-lg-3 order-1 order-lg-0">
                  <div class="sidebar__content js-sticky-top">
                    <section class="sidebar__card card">
                        <div class="sidebar__card-title">
                            <h4 class="card-title mb-1">{{ $hotel->name }}</h4>
                            <ul class="sidebar__card-meta d-flex align-items-center">
                                <li>
                                    <div class="rating">
                                        <select class="js-rating-stat" data-current-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5" selected="selected">5</option>
                                        </select>
                                    </div>
                                </li>
                                <li class="likes ml-auto text-nowrap">
                                    <i class="mr-1 icon icon-thumbs-up"></i><span>8/10</span>
                                </li>
                            </ul>
                            <hr class="my-3 mt-2"/>
                        </div>
                        <ul class="sidebar__payment">
                            <li class="d-inline-block align-top mr-5 mb-2">
                                <div class="fw-bold">Phòng</div>
                                <ul>
                                    @foreach ($rooms as $room)
                                        <li style="text-wrap: nowrap;">- {{ $room->name }} ({{ $selectedRooms[$room->id] ?? 0 }} @if(isset($selectedRooms[$room->id])) phòng @endif)</li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="d-inline-block align-top mr-5 mb-2">
                                <div class="fw-bold">Ngày nhận phòng</div>
                                <ul>
                                    <li>{{ $dateFrom ? \Carbon\Carbon::parse($dateFrom)->format('D, M d Y') : 'Chưa chọn' }}</li>
                                </ul>
                            </li>
                            <li class="d-inline-block align-top mr-5 mb-2">
                                <div class="fw-bold">Ngày trả phòng</div>
                                <ul>
                                    <li>{{ $dateTo ? \Carbon\Carbon::parse($dateTo)->format('D, M d Y') : 'Chưa chọn' }}</li>
                                </ul>
                            </li>
                            <li class="d-inline-block align-top mr-5 mb-2">
                                <div class="fw-bold">Thời gian lưu trú</div>
                                <ul>
                                    <li>{{ $totalNights }} Đêm</li>
                                </ul>
                            </li>
                        </ul>
                        <hr class="mt-2">
                        <ul class="sidebar__payment-total">
                            <li class="h4 fw-bold f-primary mb-0">Tổng giá: {{ number_format($totalPrice, 0, ',', '.') }} VND</li>
                        </ul>
                    </section>
                    <section class="sidebar__card card">
                        <div class="sidebar__card-title">
                            <h4 class="card-title mb-1">Cần trợ giúp đặt phòng?</h4>
                            <hr class="my-3 mt-2"/>
                        </div>
                        <p>Gọi cho đội ngũ dịch vụ khách hàng của chúng tôi theo số dưới đây để nói chuyện với một trong những cố vấn của chúng tôi, người sẽ giúp bạn với tất cả các nhu cầu kỳ nghỉ của bạn.</p>
                        <ul class="sidebar__contacts">
                            <li class="d-flex align-items-center">
                                <i class="icon icon-phone mr-2"></i>
                                <a class="fw-bold" href="tel:#">8-800-0011-2222-333</a>
                            </li>
                        </ul>
                    </section>
                </div>
                
              </aside>
              
              <div class="col-lg-9 d-flex" id="barba-wrapper">
                <div class="barba-container">
                    <div class="booking-card card">
                        <div class="card-body">
                            <div class="booking-card__title">
                                <h2>01 Thông tin người đặt phòng</h2>
                                <hr class="mb-4">
                            </div>
                            <form class="booking-card__form" wire:submit="placeOrder">
                                <div class="row pad-lg-20">
                                    <div class="form-group col-12 col-sm-6">
                                        <input class="form-control" type="text" wire:model="first_name" placeholder="Họ" required="required"/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-12 col-sm-6">
                                        <input class="form-control" type="text" wire:model="last_name" placeholder="Tên" required="required"/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-12 col-sm-6">
                                        <input class="form-control" id="email" type="email" wire:model="email" placeholder="Địa chỉ email" required="required"/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-12 col-sm-6">
                                        <input class="form-control" type="email" wire:model="confirm_email" placeholder="Xác nhận địa chỉ email" required="required" data-match="#email" data-match-error="Ô này không khớp"/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-12 col-sm-6">
                                        <input class="form-control" type="text" wire:model="street" placeholder="Địa chỉ và số nhà" required="required"/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-12 col-sm-6">
                                        <input class="form-control" type="text" wire:model="city" placeholder="Thành phố" required="required"/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-12 col-sm-6">
                                        <input class="form-control" id="zip" type="text" wire:model="zip_code" placeholder="Mã bưu chính" required="required"/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-12 col-sm-6">
                                        <input class="form-control" type="text" wire:model="country" placeholder="Quốc gia" required="required"/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-12">
                                        <p class="fw-sm mb-3">Yêu cầu đặc biệt: (Không đảm bảo)</p>
                                        <textarea class="form-control" rows="6" wire:model="message" required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                        
                                <!-- Phần chọn phương thức thanh toán -->
                                <div class="form-group col-12">
                                    <h3 class="mb-3">02 Chọn phương thức thanh toán</h3>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_method" id="payment_on_arrival" wire:model="payment_method" value="on_arrival" required>
                                        <label class="form-check-label" for="payment_on_arrival">
                                            Thanh toán khi nhận phòng
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_method" id="payment_vnpay" wire:model="payment_method" value="vnpay" required>
                                        <label class="form-check-label" for="payment_vnpay">
                                            Thanh toán qua VNPay
                                        </label>
                                    </div>
                                </div>
                        
                                <div class="d-flex">
                                    <button class="btn btn-secondary btn--round mx-auto ml-sm-0" type="submit">Tiếp tục đến bước tiếp theo</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            
              </div>
            </div>
            <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
          </div>
        </main>
   
        <div class="modal-map modal" id="modalMap" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header align-items-center py-2">
                <h4 class="modal-title"><a class="d-flex align-items-center" href="hotel.html"><i class="icon mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.5 22.1"><path d="M0.3,10.3C0.3,10.3,0.3,10.3,0.3,10.3c-0.4,0.5-0.4,1.2,0,1.6l10,10c0,0,0,0,0,0c0.4,0.4,1.1,0.4,1.6,0 c0.4-0.4,0.4-1.1,0-1.6l-8-8h26.6c0.6,0,1.1-0.5,1.1-1.1c0,0,0,0,0,0c0-0.6-0.5-1.1-1.1-1.1H3.8l8-8c0.4-0.4,0.4-1.1,0-1.6 c0,0,0,0,0,0c-0.4-0.4-1.1-0.4-1.6,0L0.3,10.3z"/></svg></i><span class="title">Hotel</span></a></h4>
                <button class="btn btn-secondary btn--round px-4" type="button" data-dismiss="modal">map close
                </button>
              </div>
              <div class="map-contain" id="map"></div>
            </div>
          </div>
        </div>
        <script src="{{ asset('assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyD3gFKhVywUkygSxQEBdGVrI5-ZRrdjueA') }}"></script>
       
      </body>
    </html>
</div>
