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
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700%7CPoppins:400,500,600,700"
            rel="stylesheet">

    </head>

    <body class="load">
        <div class="progress-load js-progress-load"></div>
        <div class="demo-panel bx4dp d-none d-sm-block" id="demoSwitcher">
            <div class="container">
                <div class="demo-panel__toggle btn btn-light text-primary shadow-sm js-panel-toggle"><i
                        class="fa fa-cog"></i></div>
            </div>
            <div class="demo-panel__content bg-light pt-3">
                <div class="container">
                    <div class="row flex-nowrap">
                        <div class="col-auto mb-2 d-flex align-items-center">
                            <h4>Colors</h4>
                            <div class="demo-panel__colors nav"><a class="nav-link js-toggle-theme is-active"
                                    href="#" data-path="skins/style-default.css" role="button"></a><a
                                    class="nav-link js-toggle-theme" href="#" data-path="skins/style-orange.css"
                                    role="button"></a><a class="nav-link js-toggle-theme" href="#"
                                    data-path="skins/style-green.css" role="button"></a><a
                                    class="nav-link js-toggle-theme" href="#" data-path="skins/style-red.css"
                                    role="button"></a><a class="nav-link js-toggle-theme" href="#"
                                    data-path="skins/style-purple.css" role="button"></a><a
                                    class="nav-link js-toggle-theme" href="#" data-path="skins/style-pink.css"
                                    role="button"></a>
                            </div>
                        </div>
                        <div class="col-auto mb-2 d-flex align-items-center">
                            <h4>RTL</h4>
                            <button class="btn-switch text-primary js-switch-rtl" type="button"
                                data-switch="css/bootstrap-rtl.min.css"><span class="bar bg-primary"></span><span
                                    class="toggle bg-secondary"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <main class="page-main">
            <nav class="breadcrumb-nav d-flex align-items-center" aria-label="breadcrumb">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="under" href="{{ url('/') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a class="under" href="{{ route('hotels') }}">Khách sạn</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span>Danh sách khách sạn</span></li>
                    </ol>
                    

                </div>
            </nav>
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <aside class="sidebar col-lg-3 order-1 order-lg-0">
                            <div class="sidebar__content js-sticky-top">
                                <div class="sidebar-filter modal card fade" id="sidebarFilter" tabindex="-1"
                                    role="dialog">
                                    <button class="btn-toggle btn btn-light" type="button" data-dismiss="modal"><span
                                            class="icon-bar"></span></button>
                                    <div class="modal-header bg-white">
                                        <h4 class="modal-title">Refine search result</h4>
                                    </div>
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <ul class="sidebar-filter__list">
                                                    <li class="sidebar-filter__item">
                                                        <h5 class="sidebar-filter__title">
                                                          <a class="sidebar-filter__toggle d-flex justify-content-between align-items-center"
                                                              href="#price" data-toggle="collapse" role="button">
                                                              <span>Giá (mỗi đêm)</span>
                                                              <i class="fa fa-angle-down"></i>
                                                          </a>
                                                        </h5>
                                                        <div class="collapse show" id="price">
                                                          <div class="sidebar-filter__content">
                                                            <label class="custom-control custom-checkbox">
                                                              <input class="custom-control-input"
                                                                  type="checkbox" value="50000-99000"
                                                                  wire:model.live="price_range" /><span
                                                                  class="custom-control-label pointer">50,000 - 99,000 VNĐ</span>
                                                            </label>
                                                            <label class="custom-control custom-checkbox">
                                                              <input class="custom-control-input"
                                                                  type="checkbox" value="100000-149000"
                                                                  wire:model.live="price_range" /><span
                                                                  class="custom-control-label pointer">100,000 - 149,000 VNĐ</span>
                                                            </label>
                                                            <label class="custom-control custom-checkbox">
                                                              <input class="custom-control-input"
                                                                  type="checkbox" value="150000-199000"
                                                                  wire:model.live="price_range" /><span
                                                                  class="custom-control-label pointer">150,000 - 199,000 VNĐ</span>
                                                            </label>
                                                            <label class="custom-control custom-checkbox">
                                                              <input class="custom-control-input"
                                                                  type="checkbox" value="200000-plus"
                                                                  wire:model.live="price_range" /><span
                                                                  class="custom-control-label pointer">200,000 VNĐ+</span>
                                                            </label>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <li class="sidebar-filter__item">
                                                        <h5 class="sidebar-filter__title">
                                                          <a class="sidebar-filter__toggle d-flex justify-content-between align-items-center"
                                                              href="#status" data-toggle="collapse" role="button">
                                                              <span>Trạng thái</span>
                                                              <i class="fa fa-angle-down"></i>
                                                          </a>
                                                        </h5>
                                                        <div class="collapse show" id="status">
                                                          <div class="sidebar-filter__content">
                                                            <label class="custom-control custom-checkbox">
                                                              <input class="custom-control-input"
                                                                  type="checkbox" value="special_price"
                                                                  wire:model.live="statuses" /><span
                                                                  class="custom-control-label pointer">Giá đặc biệt</span>
                                                            </label>
                                                            <label class="custom-control custom-checkbox">
                                                              <input class="custom-control-input"
                                                                  type="checkbox" value="best_seller"
                                                                  wire:model.live="statuses" /><span
                                                                  class="custom-control-label pointer">Bán chạy nhất</span>
                                                            </label>
                                                            <label class="custom-control custom-checkbox">
                                                              <input class="custom-control-input"
                                                                  type="checkbox" value="regular"
                                                                  wire:model.live="statuses" /><span
                                                                  class="custom-control-label pointer">Bình thường</span>
                                                            </label>
                                                            <label class="custom-control custom-checkbox">
                                                              <input class="custom-control-input"
                                                                  type="checkbox" value="new_arrival"
                                                                  wire:model.live="statuses" /><span
                                                                  class="custom-control-label pointer">Mới đến</span>
                                                            </label>
                                                            <label class="custom-control custom-checkbox">
                                                              <input class="custom-control-input"
                                                                  type="checkbox" value="limited_offer"
                                                                  wire:model.live="statuses" /><span
                                                                  class="custom-control-label pointer">Ưu đãi có hạn</span>
                                                            </label>
                                                            <label class="custom-control custom-checkbox">
                                                              <input class="custom-control-input"
                                                                  type="checkbox" value="recommended"
                                                                  wire:model.live="statuses" /><span
                                                                  class="custom-control-label pointer">Đề xuất</span>
                                                            </label>
                                                            <label class="custom-control custom-checkbox">
                                                              <input class="custom-control-input"
                                                                  type="checkbox" value="last_room"
                                                                  wire:model.live="statuses" /><span
                                                                  class="custom-control-label pointer">Phòng cuối cùng</span>
                                                            </label>
                                                            <label class="custom-control custom-checkbox">
                                                              <input class="custom-control-input"
                                                                  type="checkbox" value="discounted"
                                                                  wire:model.live="statuses" /><span
                                                                  class="custom-control-label pointer">Được giảm giá</span>
                                                            </label>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      

                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <div class="col-lg-9 category-content">
                            <nav class="sortbar navbar shadow-sm d-flex align-items-stretch">
                                <div class="sortbar__title d-flex align-items-stretch">
                                    <button class="navbar-brand d-flex align-items-center pointer js-toggle-sidebar"
                                        data-target="#sidebarFilter" data-toggle="modal" type="button">
                                        <i class="d-lg-none icon icon-filter"></i>
                                        <span class="ml-2 d-none d-lg-inline">Sắp xếp theo:</span>
                                    </button>
                                </div>
                                <div class="sortbar__sort js-sorting d-flex align-items-stretch">
                                    <a href="#" class="nav-link" wire:click.prevent="$set('sort_by', 'popularity')">Phổ biến</a>
                                    <a href="#" class="nav-link" wire:click.prevent="$set('sort_by', 'price_asc')">Giá: Từ Thấp đến Cao</a>
                                    <a href="#" class="nav-link" wire:click.prevent="$set('sort_by', 'price_desc')">Giá: Từ Cao đến Thấp</a>
                                    <a href="#" class="nav-link" wire:click.prevent="$set('sort_by', 'stars')">Sao</a>
                                    <a href="#" class="nav-link" wire:click.prevent="$set('sort_by', 'rating')">Đánh giá</a>
                                </div>
                                <div class="sortbar__grid d-flex align-items-stretch ml-md-auto">
                                    <a class="nav-link active js-toggle-grid" href="#" data-grid="grid" data-cols="col-12 col-sm-6 col-xl-4 d-flex">
                                        <i class="icon icon-grid"></i>
                                    </a>
                                    <a class="nav-link js-toggle-grid" href="#" data-grid="list" data-cols="col-12 d-flex">
                                        <i class="icon icon-list-mb"></i>
                                    </a>
                                </div>
                            </nav>
                            
                        
                            <div class="category-content__items row pad-lg-20">
                                @foreach ($hotels as $hotel)
                                    <div class="col-12 col-sm-6 col-xl-4 d-flex">
                                        <div class="product bg-white js-grid-item">
                                            @if ($hotel->status == 'special_price')
                                                <!-- Kiểm tra nếu có giá đặc biệt -->
                                                <div class="product__special bg-primary text-white">Giá Đặc Biệt</div>
                                            @endif
                                            @if ($hotel->status == 'best_seller')
                                                <!-- Kiểm tra nếu là best seller -->
                                                <div class="product__special bg-warning text-white">Bán Chạy Nhất</div>
                                            @endif
                                            @if ($hotel->status == 'regular')
                                                <!-- Kiểm tra nếu là regular -->
                                                <div class="product__special bg-light text-dark">Thông Thường</div>
                                            @endif
                                            @if ($hotel->status == 'new_arrival')
                                                <!-- Kiểm tra nếu là new arrival -->
                                                <div class="product__special bg-success text-white">Sản Phẩm Mới</div>
                                            @endif
                                            @if ($hotel->status == 'limited_offer')
                                                <!-- Kiểm tra nếu là limited offer -->
                                                <div class="product__special bg-danger text-white">Ưu Đãi Hạn Chế</div>
                                            @endif
                                            @if ($hotel->status == 'recommended')
                                                <!-- Kiểm tra nếu được recommended -->
                                                <div class="product__special bg-info text-white">Được Khuyến Nghị</div>
                                            @endif
                                            @if ($hotel->status == 'last_room')
                                                <!-- Kiểm tra nếu là last room -->
                                                <div class="product__special bg-dark text-white">Phòng Cuối Cùng</div>
                                            @endif
                                            @if ($hotel->status == 'discounted')
                                                <!-- Kiểm tra nếu có discount -->
                                                <div class="product__special bg-secondary text-white">Đã Giảm Giá</div>
                                            @endif
                                            <a class="product__img-top d-block"
                                                href="{{ route('hotel.details', ['id' => $hotel->id]) }}">
                                                @php
                                                    // Kiểm tra xem $hotel->image có phải là mảng không
                                                    $images = is_array($hotel->image)
                                                        ? $hotel->image
                                                        : json_decode($hotel->image, true);
                                                    // Lấy ảnh đầu tiên, nếu có
                                                    $firstImage = $images[0] ?? null;
                                                @endphp
                            
                                                @if ($firstImage)
                                                    <img class="img-fluid"
                                                        src="{{ asset('/storage/' . $firstImage) }}"
                                                        alt="{{ $hotel->name }}" />
                                                @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('/storage/default-image.jpg') }}"
                                                        alt="Hình ảnh mặc định" />
                                                @endif
                            
                                            </a>
                                            <div class="product__body">
                                                <h4 class="product__title"><a
                                                        href="{{ route('hotel.details', $hotel->id) }}">{{ $hotel->name }}</a>
                                                </h4>
                                                <div class="product__rating mb-2">
                                                    <div class="rating">
                                                        <select class="js-rating-stat"
                                                            data-current-rating="{{ 5 }}">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <option value="{{ $i }}"
                                                                    {{ $i == 5 ? 'selected' : '' }}>
                                                                    {{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                                <ul
                                                    class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                    <li class="mr-3"><span>{{ $hotel->location }}</span><i
                                                            class="bullet"></i><a href="#modalMap"
                                                            data-toggle="modal" data-title="{{ $hotel->name }}">Hiện
                                                            trên bản đồ</a></li>
                                                    <li class="d-inline-flex align-items-center">
                                                        <i class="icon icon-thumbs-up mr-1"></i>
                                                        <span>9/10</span>
                                                    </li>
                                                </ul>
                                                <hr />
                                                <ul
                                                    class="product__price d-flex justify-content-between align-items-center">
                                                    <li class="mr-2"><span>Giá mỗi đêm từ</span></li>
                                                    @php
                                                        // Giả sử tỷ giá Euro sang VND
                                                        $exchangeRate = 24000; // Tỷ giá: 1 Euro = 24,000 VND
                                                        $priceInVND = $hotel->price_per_night; // Tính giá bằng VND
                                                    @endphp
                            
                                                    <li><span
                                                            class="cost">{{ number_format($priceInVND, 0, ',', '.') }}
                                                            ₫</span></li>
                            
                                                </ul>
                                                <hr />
                                                <div class="product__desc">
                                                    <p>{!! Str::limit(strip_tags($hotel->description), 100, '...') !!}</p>
                                                    <a class="product__link-more" href="{{ route('hotel.details', $hotel->id) }}">Đọc thêm</a>
                                                </div>
                                                
                                            </div>
                                            <hr class="d-none d-sm-block" />
                                            <div class="product__footer">
                                                <ul
                                                    class="product__price d-flex justify-content-between align-items-center">
                                                    <li class="mr-2"><span>Giá mỗi đêm từ</span></li>
                                                    <li><span class="cost">{{ $hotel->price_per_night }} €</span>
                                                    </li>
                                                </ul>
                                                <a class="product__btn-book btn btn-secondary btn--round"
                                                    href="{{ route('hotel.details', $hotel->id) }}">Đặt Ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            

                            <!-- Hiển thị phân trang nếu cần -->
                            <div class="d-flex justify-content-center mt-4">
                                {{ $hotels->links('pagination::bootstrap-4') }}
                                <!-- Hoặc 'pagination::tailwind' nếu bạn đang sử dụng Tailwind CSS -->
                            </div>


                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i
                        class="fa fa-angle-up"></i></button>
            </div>
        </main>
      
        <div class="modal-map modal" id="modalMap" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header align-items-center py-2">
                        <h4 class="modal-title"><a class="d-flex align-items-center" href="hotel.html"><i
                                    class="icon mr-2"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 31.5 22.1">
                                        <path
                                            d="M0.3,10.3C0.3,10.3,0.3,10.3,0.3,10.3c-0.4,0.5-0.4,1.2,0,1.6l10,10c0,0,0,0,0,0c0.4,0.4,1.1,0.4,1.6,0 c0.4-0.4,0.4-1.1,0-1.6l-8-8h26.6c0.6,0,1.1-0.5,1.1-1.1c0,0,0,0,0,0c0-0.6-0.5-1.1-1.1-1.1H3.8l8-8c0.4-0.4,0.4-1.1,0-1.6 c0,0,0,0,0,0c-0.4-0.4-1.1-0.4-1.6,0L0.3,10.3z" />
                                    </svg></i><span class="title">Hotel</span></a></h4>
                        <button class="btn btn-secondary btn--round px-4" type="button" data-dismiss="modal">map
                            close
                        </button>
                    </div>
                    <div class="map-contain" id="map"></div>
                </div>
            </div>
        </div>

    </body>

    </html>
</div>
