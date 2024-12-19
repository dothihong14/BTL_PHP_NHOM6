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
                        <span>Đặt phòng thất bại</span>
                    </li>
                </ol>
            </div>
          </nav>
          <div class="page-content">
            <div class="container" style="
                background: white;
                padding: 11rem;
            ">
                <div class="row">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        
                    <div class="card-body text-center">
                        <div class="success-icon mb-4">
                            <i class="fas fa-times-circle fa-3x text-danger"></i> <!-- Thay đổi biểu tượng thành dấu x -->
                        </div>
                        <h2 class="mb-3">Đặt phòng thất bại!</h2> <!-- Thay đổi tiêu đề -->
                        <p class="mb-4">Xin lỗi, đơn hàng của bạn không thể được xử lý. Vui lòng thử lại sau.</p> <!-- Thay đổi nội dung thông báo -->
                        <a href="{{ route('order.history') }}" class="btn btn-primary">Xem lịch sử đơn đặt phòng</a>
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
