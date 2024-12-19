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
    <link rel="stylesheet" href="css/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="css/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link id="cssRtl" rel="stylesheet" href="#">
  
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
                    <a class="under" href="{{ route('home') }}">Trang Chủ</a>
                </li>
                <li class="breadcrumb-item">
                    <a class="under" href="{{ route('hotels') }}">Khách Sạn</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span>{{ $hotel->name ?? 'Chi Tiết Khách Sạn' }}</span>
                </li>
            </ol>
        </div>
    </nav>
    
      <div class="page-content">
        <div class="container">
          <div class="row">
            <aside class="sidebar col-lg-3">
              <div class="sidebar__content js-sticky-top">
    
                <button class="btn-toggle btn btn-primary-light border-0 w-100 py-3 d-lg-none" data-target="#hotelFinder" data-toggle="collapse" aria-expanded="true" type="button"><span class="icon-bar"></span></button>
                <div class="card d-none d-lg-flex">
                  <p class="fw-bold"><span class="count">9 803</span> khách đã thích khách sạn này</p>
                  <ul class="guests-room">
                      <li class="guests-room__item">
                          <div class="guests-room__desc">&quot;Rất sạch sẽ, đẹp, phong cách. Đi bộ 10 phút từ ga tàu điện ngầm. Những khách sạn tương tự thường có giá cao gấp nhiều lần. Giường lớn, khăn tắm, mọi thứ cần thiết. Dọn phòng một lần một ngày. Bữa sáng tuyệt vời, cà phê được chuẩn bị bởi barista - lần đầu tiên tôi gặp điều này ở khách sạn.&quot;</div>
                          <div class="guests-room__bottom d-flex align-items-center">
                              <div class="guests-room__avatar d-flex align-items-center pointer"><a class="media-object d-block rounded-circle" href="hotel-reviews.html"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/avatar-1.jpg') }}" alt="#"/></a></div>
                              <div class="guests-room__right">
                                  <h5 class="mb-1">Roman</h5>
                                  <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('assets/img/ru.png') }}" alt="#"/>
                                      <div class="country fz-xs">Nga</div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="guests-room__item">
                          <div class="guests-room__desc">&quot;Một khách sạn tuyệt vời với những phòng rộng rãi và nhà tắm tốt. Nhân viên lịch sự. Bữa sáng ngon.&quot;</div>
                          <div class="guests-room__bottom d-flex align-items-center">
                              <div class="guests-room__avatar d-flex align-items-center pointer"><a class="media-object d-block rounded-circle" href="hotel-reviews.html"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/avatar-2.jpg') }}" alt="#"/></a></div>
                              <div class="guests-room__right">
                                  <h5 class="mb-1">Jessica</h5>
                                  <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('assets/img/en.png') }}" alt="#"/>
                                      <div class="country fz-xs">Mỹ</div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="guests-room__item">
                          <div class="guests-room__desc">Tốt, khách sạn tuyệt vời. Giường tuyệt vời. Cách âm tốt. Ga tàu điện ngầm cách 25 phút đi bộ. Có chỗ đậu xe miễn phí. Chúng tôi thích!</div>
                          <div class="guests-room__bottom d-flex align-items-center">
                              <div class="guests-room__avatar d-flex align-items-center pointer"><a class="media-object d-block rounded-circle" href="hotel-reviews.html"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/avatar-3.jpg') }}" alt="#"/></a></div>
                              <div class="guests-room__right">
                                  <h5 class="mb-1">Chris</h5>
                                  <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('assets/img/au.png') }}" alt="#"/>
                                      <div class="country fz-xs">Úc</div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="guests-room__item">
                          <div class="guests-room__desc">&quot;Có chỗ đậu xe miễn phí. Tiện lợi khi đến bằng ô tô từ sân bay. Khoảng 1 km đến ga tàu điện ngầm màu vàng, không cần chuyển tiếp đến Duomo. Phòng lớn. Nhân viên bảo vệ khách sạn nói tiếng Anh. Bữa sáng tuyệt vời. Một chiếc giường khổng lồ.&quot;</div>
                          <div class="guests-room__bottom d-flex align-items-center">
                              <div class="guests-room__avatar d-flex align-items-center pointer"><a class="media-object d-block rounded-circle" href="hotel-reviews.html"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/avatar-4.jpg') }}" alt="#"/></a></div>
                              <div class="guests-room__right">
                                  <h5 class="mb-1">Maddalena</h5>
                                  <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('assets/img/it.png') }}" alt="#"/>
                                      <div class="country fz-xs">Ý</div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="guests-room__item">
                          <div class="guests-room__desc">&quot;Rất sạch sẽ, đẹp, phong cách. Đi bộ 10 phút từ ga tàu điện ngầm. Những khách sạn tương tự thường có giá cao gấp nhiều lần. Giường lớn, khăn tắm, mọi thứ cần thiết. Dọn phòng một lần một ngày. Bữa sáng tuyệt vời, cà phê được chuẩn bị bởi barista - lần đầu tiên tôi gặp điều này ở khách sạn.&quot;</div>
                          <div class="guests-room__bottom d-flex align-items-center">
                              <div class="guests-room__avatar d-flex align-items-center pointer"><a class="media-object d-block rounded-circle" href="hotel-reviews.html"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/avatar-1.jpg') }}" alt="#"/></a></div>
                              <div class="guests-room__right">
                                  <h5 class="mb-1">Roman</h5>
                                  <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('assets/img/ru.png') }}" alt="#"/>
                                      <div class="country fz-xs">Nga</div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="guests-room__item">
                          <div class="guests-room__desc">&quot;Một khách sạn tuyệt vời với những phòng rộng rãi và nhà tắm tốt. Nhân viên lịch sự. Bữa sáng ngon.&quot;</div>
                          <div class="guests-room__bottom d-flex align-items-center">
                              <div class="guests-room__avatar d-flex align-items-center pointer"><a class="media-object d-block rounded-circle" href="hotel-reviews.html"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/avatar-2.jpg') }}" alt="#"/></a></div>
                              <div class="guests-room__right">
                                  <h5 class="mb-1">Jessica</h5>
                                  <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('assets/img/en.png') }}" alt="#"/>
                                      <div class="country fz-xs">Mỹ</div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="guests-room__item">
                          <div class="guests-room__desc">Tốt, khách sạn tuyệt vời. Giường tuyệt vời. Cách âm tốt. Ga tàu điện ngầm cách 25 phút đi bộ. Có chỗ đậu xe miễn phí. Chúng tôi thích!</div>
                          <div class="guests-room__bottom d-flex align-items-center">
                              <div class="guests-room__avatar d-flex align-items-center pointer"><a class="media-object d-block rounded-circle" href="hotel-reviews.html"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/avatar-3.jpg') }}" alt="#"/></a></div>
                              <div class="guests-room__right">
                                  <h5 class="mb-1">Chris</h5>
                                  <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('assets/img/au.png') }}" alt="#"/>
                                      <div class="country fz-xs">Úc</div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="guests-room__item">
                          <div class="guests-room__desc">&quot;Có chỗ đậu xe miễn phí. Tiện lợi khi đến bằng ô tô từ sân bay. Khoảng 1 km đến ga tàu điện ngầm màu vàng, không cần chuyển tiếp đến Duomo. Phòng lớn. Nhân viên bảo vệ khách sạn nói tiếng Anh. Bữa sáng tuyệt vời. Một chiếc giường khổng lồ.&quot;</div>
                          <div class="guests-room__bottom d-flex align-items-center">
                              <div class="guests-room__avatar d-flex align-items-center pointer"><a class="media-object d-block rounded-circle" href="hotel-reviews.html"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/avatar-4.jpg') }}" alt="#"/></a></div>
                              <div class="guests-room__right">
                                  <h5 class="mb-1">Maddalena</h5>
                                  <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('assets/img/it.png') }}" alt="#"/>
                                      <div class="country fz-xs">Ý</div>
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
              
              </div>
            </aside>
            <div class="col-lg-9" id="barba-wrapper">
              <div class="barba-container">
                <nav class="hotel-nav">
                  <ul class="hotel-nav__menu nav nav-tabs" role="tablist">
                    <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link active" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false"><span>Thông tin khách sạn và giá phòng</span></a>
                    </li>
                    <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link" data-toggle="tab" href="#hotelServices" role="tab" aria-controls="hotelServices" aria-selected="true"><span>Tiện nghi &amp; Dịch vụ</span></a>
                    </li>
                    <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link" data-toggle="tab" href="#hotelAccommodation" role="tab" aria-controls="hotelAccommodation" aria-selected="true"><span>Các điều kiện lưu trú</span></a>
                    </li>
                    <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link" data-toggle="tab" href="#hotelReviews" role="tab" aria-controls="hotelReviews" aria-selected="true"><span>Đánh giá của khách</span></a>
                    </li>
                </ul>
                
                </nav>
                <div class="tab-content">
                  <div class="tab-pane active show" id="hotel" role="tabpanel">
                    <section>
                      <h3 class="fw-md mb-1">{{ $hotel->name }}</h3>
                      <ul class="hotel-title mb-3">
                          <li class="stars mb-2">
                              <div class="rating">
                                  <select class="js-rating-stat" data-current-rating="{{ $hotel->star_rating }}">
                                      @for ($i = 1; $i <= 5; $i++)
                                          <option value="{{ $i }}" {{ $i == $hotel->star_rating ? 'selected' : '' }}>{{ $i }}</option>
                                      @endfor
                                  </select>
                              </div>
                          </li>
                          <li class="d-flex">
                              <div class="media-object"><i class="icon icon-label mr-2 text-primary"></i></div>
                              <div class="local">
                                  <span>{{ $hotel->locationRelation->name ?? 'Unknown Location' }}, {{ $hotel->locationRelation->country->name ?? 'Unknown Country' }}</span>
                                  <i class="bullet mx-2"></i>
                                  <a href="#modalMap" data-toggle="modal" data-title="{{ $hotel->name }}"> </a>
                              </div>
                          </li>
                      </ul>
                      <div class="hotel-gallery">
                        <div class="hotel-gallery__carousel swiper-container js-hotel-carousel">
                          <div class="swiper-wrapper">
                            @foreach ($hotel->image as $img)

                            <div class="swiper-slide"><img class="img-fluid img-cover" src="{{ asset('storage/' . $img) }}"  alt="{{ $hotel->name }}"/>
                            </div>
                        @endforeach
                         
                          </div>
                          <div class="hotel-gallery__controls"><a class="hotel-gallery__arrow shadow-sm js-prev" role="button"><i class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 44 44"><path d="M22.119 44.237C9.922 44.237 0 34.315 0 22.119S9.922.001 22.119.001s22.119 9.922 22.119 22.118-9.924 22.118-22.119 22.118zm0-42.736C10.75 1.501 1.5 10.75 1.5 22.119c0 11.368 9.25 20.618 20.619 20.618s20.619-9.25 20.619-20.618c0-11.369-9.25-20.618-20.619-20.618z"/><path d="M24.667 29.884a.74.74 0 0 1-.53-.22l-7.328-7.334a.752.752 0 0 1 0-1.061l7.328-7.333a.75.75 0 1 1 1.061 1.061L18.4 21.8l6.798 6.805a.752.752 0 0 1 0 1.061.75.75 0 0 1-.531.218z"/></svg></i></a><a class="hotel-gallery__arrow shadow-sm js-next" role="button"><i class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 44 44"><path d="M22.118 44.236C9.922 44.236 0 34.314 0 22.118S9.922 0 22.118 0s22.118 9.922 22.118 22.118-9.922 22.118-22.118 22.118zm0-42.736C10.75 1.5 1.5 10.749 1.5 22.118c0 11.368 9.25 20.618 20.618 20.618 11.37 0 20.618-9.25 20.618-20.618 0-11.369-9.248-20.618-20.618-20.618z"/><path d="M19.341 29.884a.75.75 0 0 1-.53-1.281l6.796-6.804-6.796-6.803a.75.75 0 1 1 1.061-1.061l7.325 7.333a.75.75 0 0 1 0 1.061l-7.325 7.333a.742.742 0 0 1-.531.222z"/></svg></i></a></div>
                        </div>
                        <div class="hotel-gallery__thumbs swiper-container js-hotel-carousel-thumbs">
                          <div class="swiper-wrapper">
                            @foreach ($hotel->image as $img)

                            <div class="swiper-slide"><a class="hotel-gallery__thumb js-gallery-link" href="img/upload/1.jpg" data-description="Joshua Tree Homesteader Cabin"><img class="img-cover"  src="{{ asset('storage/' . $img) }}" alt="#"/></a></div>

                        @endforeach
                          
                          </div>
                        </div>
                      </div>


 











                      <hr>
                      <div class="row">
                        <div class="col-12 col-md-8 d-flex">
                            <div class="hotel__intro hotel-card w-100">
                                <section class="pb-4">
                                    <h5 class="d-flex align-items-center text-primary mb-3">
                                        <i class="icon icon-badge mr-2"></i>
                                        Một trong những khách sạn tốt nhất ở {{ $hotel->location }} theo đánh giá của khách hàng
                                    </h5>
                                    <p>{!! Str::limit(strip_tags($hotel->description), 1000, '...') !!}</p>
                                    <p>{{ $hotel->features }}</p>
                                </section>
                                
                                <section>
                                    <h5>Dịch vụ phổ biến trong khách sạn</h5>
                                    @if (!empty($rooms) && count($rooms) > 0)
                                    <ul class="hotel-facilities d-flex flex-wrap flex-column flex-md-row">
                                        @foreach ($rooms[0]->facilities as $service)
                                            <li class="mr-2">
                                                <i class="align-middle icon text-secondary mr-2"></i>
                                                <span class="align-middle mr-2">{{ $service }}</span>
                                                <i class="bullet d-none d-md-inline-block"></i>
                                            </li>
                                        @endforeach
                                    </ul>
                                    @else
                                        <p>Không có tiện nghi nào khả dụng.</p> <!-- Thông báo nếu không có phòng -->
                                    @endif
                                </section>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-4 d-flex">
                            <div class="hotel-stats hotel-card w-100">



                           <div class="row">
    <div class="col-12 col-sm-auto col-md-12">
        <h3 class="mb-3">Khách hàng thích:</h3>
    </div>


   <div class="col-12 col-sm col-md-12">
    <div class="hotel-stats__like d-flex flex-wrap justify-content-between align-items-center mb-3">
        <div class="title mr-3 fw-bold">Đánh giá của khách</div>
        <div class="likes">
            <i class="icon icon-thumbs-up mr-2"></i>
            @if ($ratings->isNotEmpty())
                @php
                    // Tính điểm trung bình cho khách sạn
                    $averageRating = $ratings->avg(function ($rating) {
                        return ($rating->comfort_score + $rating->facilities_score + $rating->staff_score + $rating->food_score + $rating->value_score) / 5;
                    });
                @endphp
                <span class="amount">{{ number_format($averageRating, 1) }} / 10</span>
            @else
                <span class="amount">Chưa có đánh giá</span>
            @endif
        </div>
    </div>
    
    <ul class="hotel-stats__progress js-point-progress">
        <!-- Các hạng mục đánh giá như trước -->
        <li class="item mb-1">
            <div class="title">Sự thoải mái</div>
            <div class="d-flex align-items-center">
                <div class="progress progress--sm">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: {{ $ratings->isNotEmpty() ? number_format($ratings->avg('comfort_score'), 2) * 10 : 0 }}%" aria-valuenow="{{ $ratings->isNotEmpty() ? number_format($ratings->avg('comfort_score'), 2) * 10 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>{{ $ratings->isNotEmpty() ? number_format($ratings->avg('comfort_score'), 2) : 0 }}</span>
            </div>
        </li>
        <li class="item mb-1">
            <div class="title">Tiện nghi</div>
            <div class="d-flex align-items-center">
                <div class="progress progress--sm">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: {{ $ratings->isNotEmpty() ? number_format($ratings->avg('facilities_score'), 2) * 10 : 0 }}%" aria-valuenow="{{ $ratings->isNotEmpty() ? number_format($ratings->avg('facilities_score'), 2) * 10 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>{{ $ratings->isNotEmpty() ? number_format($ratings->avg('facilities_score'), 2) : 0 }}</span>
            </div>
        </li>
        <li class="item mb-1">
            <div class="title">Nhân viên</div>
            <div class="d-flex align-items-center">
                <div class="progress progress--sm">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: {{ $ratings->isNotEmpty() ? number_format($ratings->avg('staff_score'), 2) * 10 : 0 }}%" aria-valuenow="{{ $ratings->isNotEmpty() ? number_format($ratings->avg('staff_score'), 2) * 10 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>{{ $ratings->isNotEmpty() ? number_format($ratings->avg('staff_score'), 2) : 0 }}</span>
            </div>
        </li>
        <li class="item mb-1">
            <div class="title">Thức ăn</div>
            <div class="d-flex align-items-center">
                <div class="progress progress--sm">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: {{ $ratings->isNotEmpty() ? number_format($ratings->avg('food_score'), 2) * 10 : 0 }}%" aria-valuenow="{{ $ratings->isNotEmpty() ? number_format($ratings->avg('food_score'), 2) * 10 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>{{ $ratings->isNotEmpty() ? number_format($ratings->avg('food_score'), 2) : 0 }}</span>
            </div>
        </li>
        <li class="item mb-1">
            <div class="title">Tỷ lệ giá cả - chất lượng</div>
            <div class="d-flex align-items-center">
                <div class="progress progress--sm">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: {{ $ratings->isNotEmpty() ? number_format($ratings->avg('value_score'), 2) * 10 : 0 }}%" aria-valuenow="{{ $ratings->isNotEmpty() ? number_format($ratings->avg('value_score'), 2) * 10 : 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>{{ $ratings->isNotEmpty() ? number_format($ratings->avg('value_score'), 2) : 0 }}</span>
            </div>
        </li>
    </ul>

    <!-- Phần đánh giá -->
    <livewire:review-modal :hotel_id="$hotel->id" :is_booked="$is_booked" />
    
    
    @if (!$is_booked)
        <p class="text-danger">Bạn cần đặt phòng trước khi đánh giá!</p>
    @endif
</div>

</div>

<!-- Modal Đánh giá -->
 


                            















                            </div>
                        </div>
                    </div>
                    
                    <form class="hotel-card hotel-status" action="{{ route('hotels.booking', ['hotelId' => $hotel->id]) }}" method="GET"  onsubmit="return validateRooms()">
                      <h4>Đặt phòng ngay</h4>
                      <div class="row">
                          <div class="col-12 text-center text-xl-left col-xl">
                              <div class="row">
                                  <div class="form-group col-12 col-sm-4">
                                      <label class="label-text">Ngày nhận phòng</label>
                                      <div class="input-date-group position-relative">
                                          <i class="mr-2 icon icon-calendar text-secondary"></i>
                                          <input class="form-control js-input-date hidden" id="statusDateFrom" type="text" name="date_from" />
                                          <label class="form-control date" for="statusDateFrom"></label>
                                      </div>
                                      <span>từ 14:00</span>
                                  </div>
                                  <div class="form-group col-12 col-sm-4">
                                      <label class="label-text">Ngày trả phòng</label>
                                      <div class="input-date-group position-relative">
                                          <i class="mr-2 icon icon-calendar text-secondary"></i>
                                          <input class="form-control js-input-date hidden" id="statusDateTo" type="text" name="date_to" />
                                          <label class="form-control date" for="statusDateTo"></label>
                                      </div>
                                      <span>13 đêm</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-auto mx-auto">
                              <button class="btn btn-light btn--round" type="submit">Đặt phòng ngay</button>
                          </div>
                      </div>
                  
                      <div class="hotel-card hotel-items">
                          <div class="cart-header">
                              <h4 class="card-title">Phòng còn trống</h4>
                              <hr>
                          </div>
                          <div class="row">
                              <div class="col-12 col-md-8 order-1 order-md-0">
                                  @foreach($rooms as $room) <!-- Lặp qua từng phòng -->
                                      <div class="hotel-package mb-4">
                                          <div class="hotel-package__row row mb-4">
                                              <div class="col-6 pr-md-1">
                                                  <a class="hotel-package__img d-block" href="#">
                                                      <img class="img-fluid" src="{{ asset('storage/'.$room->image) }}" alt="{{ $room->name }}"/>
                                                  </a>
                                              </div>
                                              <div class="col-6">
                                                  <h4 class="hotel-package__title d-inline-block">{{ $room->name }}</h4>
                                                  <ul class="hotel-package__props">
                                                      <li class="mb-2 rooms">
                                                          <span class="title mr-1">Phòng:</span>
                                                          <span class="form-select form-select--sm">
                                                              <select class="form-control select2 js-form-select" name="room[{{ $room->id }}]">
                                                                  <option value="">Chọn phòng</option>
                                                                  @for($i = 1; $i <= $room->capacity; $i++)
                                                                      <option value="{{ $i }}">{{ $i }}</option>
                                                                  @endfor
                                                              </select>
                                                          </span>
                                                      </li>
                                                      <li class="mb-2 price">
                                                          @php
                                                              // Giá phòng sau khi chuyển đổi
                                                              $priceInVND = $room->price; 
                                                          @endphp
                                                          <span class="cost fw-bold">{{ number_format($priceInVND, 0, ',', '.') }} VND</span>
                                                      </li>
                                                      <li class="mb-2 prepayment">
                                                          <span class="title mr-1">Đặt cọc:</span>
                                                          <span class="fw-bold">30%</span>
                                                      </li>
                                                      <li class="mb-2 guests">
                                                          <span class="title mr-1">Khách tối đa:</span>
                                                          <span>
                                                              @for($i = 0; $i < $room->capacity; $i++)
                                                                  <i class="icon icon-user mr-1"></i>
                                                              @endfor
                                                          </span>
                                                      </li>
                                                  </ul>
                                                  <button class="btn-more fw-bold text-primary pointer point-fade js-hotel-show-more" type="button">Thêm thông tin +</button>
                                              </div>
                                          </div>
                                          <div class="collapse js-addition">
                                              <div class="hotel-package__more">
                                                  <p class="mb-2">{{ $room->description }}</p>
                                                  <ul class="hotel-package__menu">
                                                      <li class="d-flex align-items-center mb-2">
                                                          <i class="mr-2 icon icon-coffee-cup text-primary"></i>
                                                          <span class="mt-1 fw-sm">Bữa sáng đã bao gồm trong giá phòng.</span>
                                                      </li>
                                                  </ul>
                                                  <h5 class="mb-3 fw-bold">Tiện nghi phòng</h5>
                                                  <ul class="hotel-package__options list-inline">
                                                      @foreach ($room->facilities as $facility)
                                                          <li><span>{{ $facility }}</span></li>
                                                      @endforeach
                                                  </ul>
                                              </div>
                                          </div>
                                          <hr class="hr-bottom my-0">
                                      </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  </form>
                  
                    
                    <script>
                      function validateRooms() {
                          const roomSelects = document.querySelectorAll('select[name^="room"]');
                          let valid = true;
                          
                          roomSelects.forEach(select => {
                              // Nếu phòng không được chọn, không gửi đi
                              if (select.value === '') {
                                  select.name = ''; // Xóa tên phòng để không gửi
                              } else {
                                  select.name = `room[${select.name.match(/\d+/)[0]}]`; // Đảm bảo tên phòng vẫn hợp lệ
                              }
                          });
                      
                          return valid; // Nếu tất cả đều hợp lệ, cho phép gửi form
                      }
                      </script>
                    
                    



                    </section>
                  </div>
                  <div class="tab-pane" id="hotelServices" role="tabpanel">
                    <section>
                      <h3 class="fw-md">Facilities & Services</h3>
                      <hr class="mb-4">
                      <div class="hotel-card">
                        <h5>Most popular facilities</h5>
                        <ul class="hotel-facilities d-flex flex-wrap flex-column flex-md-row mb-3">
                          <li class="mr-2"><i class="align-middle icon text-secondary icon-wifi mr-2"></i><span class="align-middle mr-2">Wi-Fi</span><i class="bullet d-none d-md-inline-block"></i></li>
                          <li class="mr-2"><i class="align-middle icon text-secondary icon-24-hours mr-2"></i><span class="align-middle mr-2">24-hour front desk</span><i class="bullet d-none d-md-inline-block"></i></li>
                          <li class="mr-2"><i class="align-middle icon text-secondary icon-freezer mr-2"></i><span class="align-middle mr-2">Air conditioning</span><i class="bullet d-none d-md-inline-block"></i></li>
                          <li class="mr-2"><i class="align-middle icon text-secondary icon-food mr-2"></i><span class="align-middle mr-2">Food and beverage delivery to the room</span><i class="bullet d-none d-md-inline-block"></i></li>
                          <li class="mr-2"><i class="align-middle icon text-secondary icon-parking mr-2"></i><span class="align-middle mr-2">Free parking</span><i class="bullet d-none d-md-inline-block"></i></li>
                          <li class="mr-2"><i class="align-middle icon text-secondary icon-no-smoking mr-2"></i><span class="align-middle mr-2">Non-smoking rooms</span><i class="bullet d-none d-md-inline-block"></i></li>
                          <li class="mr-2"><i class="align-middle icon text-secondary icon-pets mr-2"></i><span class="align-middle mr-2">Pets Allowed</span><i class="bullet d-none d-md-inline-block"></i></li>
                        </ul>
                        <div class="row">
                          <div class="col-12 col-sm-6">
                            <div class="hotel-service mb-4">
                              <div class="hotel-service__title d-flex mb-3"><i class="icon icon-dinner mr-2"></i>
                                <h4 class="h4">Food and Beverages</h4>
                              </div>
                              <ul class="hotel-service__list">
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Wine / Champagne</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Special diet menus</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Snack bar</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Breakfast in the room</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Restaurant</span>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <div class="hotel-service mb-4">
                              <div class="hotel-service__title d-flex mb-3"><i class="icon icon-cleaning mr-2"></i>
                                <h4 class="h4">Cleaning services</h4>
                              </div>
                              <ul class="hotel-service__list">
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Daily cleaning</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Ironing Service</span>
                                    <div class="w-100"></div><span class="available">(Paid separately)</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Dry Cleaning</span>
                                    <div class="w-100"></div><span class="available">(Paid separately)</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Laundry</span>
                                    <div class="w-100"></div><span class="available">(Paid separately)</span>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <div class="hotel-service mb-4">
                              <div class="hotel-service__title d-flex mb-3"><i class="icon icon-parking mr-2"></i>
                                <h4 class="h4">Parking</h4>
                              </div>
                              <ul class="hotel-service__list">
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Is free! Free private parking is possible on site (reservation is not needed).</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Parking spaces for people with disabilities</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Secured parking</span>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <div class="hotel-service mb-4">
                              <div class="hotel-service__title d-flex mb-3"><i class="icon icon-info mr-2"></i>
                                <h4 class="h4">General services</h4>
                              </div>
                              <ul class="hotel-service__list">
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Common lounge / lounge with TV</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Air conditioning</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Smoking is prohibited throughout the property.</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Soundproofed rooms</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Elevator</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Family rooms</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Facilities for disabled guests</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Food and beverage delivery to the room</span>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-12 col-sm-6">
                            <div class="hotel-service mb-4">
                              <div class="hotel-service__title d-flex mb-3"><i class="icon icon-disabled mr-2"></i>
                                <h4 class="h4">Availability</h4>
                              </div>
                              <ul class="hotel-service__list">
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Cord / button call help in the bathroom</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Suitable for wheelchair users</span>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <div class="hotel-service mb-4">
                              <div class="hotel-service__title d-flex mb-3"><i class="icon icon-pets mr-2"></i>
                                <h4 class="h4">Pets</h4>
                              </div>
                              <ul class="hotel-service__list">
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Pets are allowed on request. This service can be paid.</span>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <div class="hotel-service mb-4">
                              <div class="hotel-service__title d-flex mb-3"><i class="icon icon-family mr-2"></i>
                                <h4 class="h4">Entertainment and Family Services</h4>
                              </div>
                              <ul class="hotel-service__list">
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Children's TV channels</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Babysitting service</span>
                                    <div class="w-100"></div><span class="available">(Paid separately)</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Children's room</span>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <div class="hotel-service mb-4">
                              <div class="hotel-service__title d-flex mb-3"><i class="icon icon-credits mr-2"></i>
                                <h4 class="h4">Business center services</h4>
                              </div>
                              <ul class="hotel-service__list">
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Fax / Photocopying</span>
                                    <div class="w-100"></div><span class="available">(Paid separately)</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Conference hall / banquet hall</span>
                                    <div class="w-100"></div><span class="available">(Paid separately)</span>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <div class="hotel-service mb-4">
                              <div class="hotel-service__title d-flex mb-3"><i class="icon icon-receptionist mr-2"></i>
                                <h4 class="h4">Reseption</h4>
                              </div>
                              <ul class="hotel-service__list">
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Concierge Service</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Luggage office</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>24-hour front desk</span>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <div class="hotel-service mb-4">
                              <div class="hotel-service__title d-flex mb-3"><i class="icon icon-bellboy mr-2"></i>
                                <h4 class="h4">Staff speaks</h4>
                              </div>
                              <ul class="hotel-service__list">
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>English</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>French</span>
                                  </div>
                                </li>
                                <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                  <div class="d-block"><span>Italian</span>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="hotel-card">
                        <h4 class="mb-4">Several reasons to choose accommodation option Hotel Ravena</h4>
                        <ul class="hotel-options row">
                          <li class="col-12 col-sm-6 d-flex mb-3"><i class="icon icon-check-button"></i><span>Reasonable prices</span></li>
                          <li class="col-12 col-sm-6 d-flex mb-3"><i class="icon icon-check-button"></i><span>Staff speaks 3 languages</span></li>
                          <li class="col-12 col-sm-6 d-flex mb-3"><i class="icon icon-check-button"></i><span>One of the best options chosen by guests in the city of Milan</span></li>
                          <li class="col-12 col-sm-6 d-flex mb-3"><i class="icon icon-check-button"></i><span>Manage reservations online</span></li>
                          <li class="col-12 col-sm-6 d-flex mb-3"><i class="icon icon-check-button"></i><span>Free parking</span></li>
                        </ul>
                      </div>
                    </section>
                  </div>
                  <div class="tab-pane" id="hotelAccommodation" role="tabpanel">
                    <section>
                      <h3 class="fw-md">Accommodation conditions</h3>
                      <hr class="mb-4">
                      <div class="hotel-checklist hotel-card">
                        <div class="row">
                          <div class="col-12 col-sm-4">
                            <h5 class="title d-flex"><i class="icon icon-calendar mr-2"></i>Check-in:</h5>
                          </div>
                          <div class="col-12 col-sm-8">
                            <p>From 15:00 hours</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-sm-4">
                            <h5 class="title d-flex"><i class="icon icon-calendar mr-2"></i>Check-out:</h5>
                          </div>
                          <div class="col-12 col-sm-8">
                            <p>15:00 hours</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-sm-4">
                            <h5 class="title d-flex"><i class="icon icon-info mr-2"></i>Cancellation / prepayment</h5>
                          </div>
                          <div class="col-12 col-sm-8">
                            <p>Cancellation and prepayment policies vary by room category. <a href="#">Please enter the dates of your stay </a>and read the booking conditions for the requested room.</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-sm-4">
                            <h5 class="title d-flex"><i class="icon icon-family mr-2"></i>Accommodation of children</h5>
                          </div>
                          <div class="col-12 col-sm-8">
                            <p>All children are welcome.</p>
                            <p><span class="mark bg-primary-light"><span class="bold">strong Is free!  </span>One child under 2 years stays free of charge in a baby cot.</span></p>
                            <p>Maximum capacity of extra beds / babycots in a room is 1.</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-sm-4">
                            <h5 class="title d-flex"><i class="icon icon-pets mr-2"></i>Pets</h5>
                          </div>
                          <div class="col-12 col-sm-8">
                            <p>Pets are allowed on request. This service can be paid.</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-sm-4">
                            <h5 class="title d-flex"><i class="icon icon-credits mr-2"></i>Accepted for payment</h5>
                          </div>
                          <div class="col-12 col-sm-8">
                            <ul class="hotel-checklist__payment">
                              <li class="d-inline-block mr-2 mb-2"><img src="{{ asset('assets/img/american-express.jpg') }}" alt="american-express"></li>
                              <li class="d-inline-block mr-2 mb-2"><img src="{{ asset('assets/img/visa.jpg') }}" alt="visa"></li>
                              <li class="d-inline-block mr-2 mb-2"><img src="{{ asset('assets/img/master-card.jpg') }}" alt="master-card"></li>
                              <li class="d-inline-block mr-2 mb-2"><img src="{{ asset('assets/img/maestro.jpg') }}" alt="maestro"></li>
                              <li class="d-inline-block mr-2 mb-2"><img src="{{ asset('assets/img/discover.jpg') }}" alt="discover"></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section class="hotel-popular">
                      <h3>Popular hotels in the area</h3>
                      <hr class="mb-4">
                      <div class="row">
                        <div class="col-12 d-flex mb-4 pb-2">
                          <div class="product bg-white product--list">
                            <div class="product__special bg-primary text-white">special price
                            </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="{{ asset('assets/img/hotels/item-15.jpg') }}" alt="#"/></a>
                            <div class="product__body">
                              <h4 class="product__title"><a href="hotel.html">Al Moggar Garden Beach Club</a></h4>
                              <div class="product__rating mb-2">
                                <div class="rating">
                                  <select class="js-rating-stat" data-current-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5" selected="selected">5</option>
                                  </select>
                                </div>
                              </div>
                              <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                <li class="mr-3"><span>Egypt</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Al Moggar Garden Beach Club">Show on map</a></li>
                                <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                              </ul>
                              <hr/>
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="cost">50 €</span>
                                </li>
                              </ul>
                              <hr/>
                              <div class="product__desc">
                                <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                              </div>
                            </div>
                            <hr class="d-none d-sm-block"/>
                            <div class="product__footer">
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="cost">50 €</span>
                                </li>
                              </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex mb-4 pb-2">
                          <div class="product bg-white product--list">
                            <div class="product__special bg-purple text-white">best seller
                            </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="{{ asset('assets/img/hotels/item-16.jpg') }}" alt="#"/></a>
                            <div class="product__body">
                              <h4 class="product__title"><a href="hotel.html">Resort Spa Hotel</a></h4>
                              <div class="product__rating mb-2">
                                <div class="rating">
                                  <select class="js-rating-stat" data-current-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5" selected="selected">5</option>
                                  </select>
                                </div>
                              </div>
                              <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                <li class="mr-3"><span>Thailand</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Resort Spa Hotel">Show on map</a></li>
                                <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                              </ul>
                              <hr/>
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="cost">110 €</span>
                                </li>
                              </ul>
                              <hr/>
                              <div class="product__desc">
                                <p>A quiet and cozy spa hotel is located just 80 meters from the coast. Here you can relax, relax from everyday bustle, and also undergo various strengthening programs and spa treatments. All ... </p><a class="product__link-more" href="hotel.html">Read more</a>
                              </div>
                            </div>
                            <hr class="d-none d-sm-block"/>
                            <div class="product__footer">
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="cost">110 €</span>
                                </li>
                              </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex mb-4 pb-2">
                          <div class="product bg-white product--list"><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="{{ asset('assets/img/hotels/item-17.jpg') }}" alt="#"/></a>
                            <div class="product__body">
                              <h4 class="product__title"><a href="hotel.html">Macronissos Village Bungalows</a></h4>
                              <div class="product__rating mb-2">
                                <div class="rating">
                                  <select class="js-rating-stat" data-current-rating="4">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4" selected="selected">4</option>
                                    <option value="5">5</option>
                                  </select>
                                </div>
                              </div>
                              <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                <li class="mr-3"><span>Cyprus</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Macronissos Village Bungalows">Show on map</a></li>
                                <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>9/10</span></li>
                              </ul>
                              <hr/>
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="cost">75 €</span>
                                </li>
                              </ul>
                              <hr/>
                              <div class="product__desc">
                                <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                              </div>
                            </div>
                            <hr class="d-none d-sm-block"/>
                            <div class="product__footer">
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="cost">75 €</span>
                                </li>
                              </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex mb-4 pb-2">
                          <div class="product bg-white product--list"><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="{{ asset('assets/img/hotels/item-17.jpg') }}" alt="#"/></a>
                            <div class="product__body">
                              <h4 class="product__title"><a href="hotel.html">Macronissos Village Bungalows</a></h4>
                              <div class="product__rating mb-2">
                                <div class="rating">
                                  <select class="js-rating-stat" data-current-rating="4">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4" selected="selected">4</option>
                                    <option value="5">5</option>
                                  </select>
                                </div>
                              </div>
                              <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                <li class="mr-3"><span>Cyprus</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Macronissos Village Bungalows">Show on map</a></li>
                                <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>9/10</span></li>
                              </ul>
                              <hr/>
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="sale mr-2">95 €</span><span class="cost">75 €</span>
                                </li>
                              </ul>
                              <hr/>
                              <div class="product__desc">
                                <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                              </div>
                            </div>
                            <hr class="d-none d-sm-block"/>
                            <div class="product__footer">
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="sale mr-2">95 €</span><span class="cost">75 €</span>
                                </li>
                              </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex mb-4 pb-2">
                          <div class="product bg-white product--list">
                            <div class="product__special bg-purple text-white">best seller
                            </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="{{ asset('assets/img/hotels/item-16.jpg') }}" alt="#"/></a>
                            <div class="product__body">
                              <h4 class="product__title"><a href="hotel.html">Resort Spa Hotel</a></h4>
                              <div class="product__rating mb-2">
                                <div class="rating">
                                  <select class="js-rating-stat" data-current-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5" selected="selected">5</option>
                                  </select>
                                </div>
                              </div>
                              <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                <li class="mr-3"><span>Thailand</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Resort Spa Hotel">Show on map</a></li>
                                <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                              </ul>
                              <hr/>
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="cost">110 €</span>
                                </li>
                              </ul>
                              <hr/>
                              <div class="product__desc">
                                <p>A quiet and cozy spa hotel is located just 80 meters from the coast. Here you can relax, relax from everyday bustle, and also undergo various strengthening programs and spa treatments. All ... </p><a class="product__link-more" href="hotel.html">Read more</a>
                              </div>
                            </div>
                            <hr class="d-none d-sm-block"/>
                            <div class="product__footer">
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="cost">110 €</span>
                                </li>
                              </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex mb-4 pb-2">
                          <div class="product bg-white product--list">
                            <div class="product__special bg-primary text-white">special price
                            </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="{{ asset('assets/img/hotels/item-15.jpg') }}" alt="#"/></a>
                            <div class="product__body">
                              <h4 class="product__title"><a href="hotel.html">Al Moggar Garden Beach Club</a></h4>
                              <div class="product__rating mb-2">
                                <div class="rating">
                                  <select class="js-rating-stat" data-current-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5" selected="selected">5</option>
                                  </select>
                                </div>
                              </div>
                              <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                <li class="mr-3"><span>Egypt</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Al Moggar Garden Beach Club">Show on map</a></li>
                                <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                              </ul>
                              <hr/>
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="cost">50 €</span>
                                </li>
                              </ul>
                              <hr/>
                              <div class="product__desc">
                                <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                              </div>
                            </div>
                            <hr class="d-none d-sm-block"/>
                            <div class="product__footer">
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="cost">50 €</span>
                                </li>
                              </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex mb-4 pb-2">
                          <div class="product bg-white product--list">
                            <div class="product__special bg-primary text-white">special price
                            </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="{{ asset('assets/img/hotels/item-15.jpg') }}" alt="#"/></a>
                            <div class="product__body">
                              <h4 class="product__title"><a href="hotel.html">Al Moggar Garden Beach Club</a></h4>
                              <div class="product__rating mb-2">
                                <div class="rating">
                                  <select class="js-rating-stat" data-current-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5" selected="selected">5</option>
                                  </select>
                                </div>
                              </div>
                              <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                <li class="mr-3"><span>Egypt</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Al Moggar Garden Beach Club">Show on map</a></li>
                                <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                              </ul>
                              <hr/>
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="cost">50 €</span>
                                </li>
                              </ul>
                              <hr/>
                              <div class="product__desc">
                                <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                              </div>
                            </div>
                            <hr class="d-none d-sm-block"/>
                            <div class="product__footer">
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="cost">50 €</span>
                                </li>
                              </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex mb-4 pb-2">
                          <div class="product bg-white product--list">
                            <div class="product__special bg-purple text-white">best seller
                            </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="{{ asset('assets/img/hotels/item-16.jpg') }}" alt="#"/></a>
                            <div class="product__body">
                              <h4 class="product__title"><a href="hotel.html">Resort Spa Hotel</a></h4>
                              <div class="product__rating mb-2">
                                <div class="rating">
                                  <select class="js-rating-stat" data-current-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5" selected="selected">5</option>
                                  </select>
                                </div>
                              </div>
                              <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                <li class="mr-3"><span>Thailand</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Resort Spa Hotel">Show on map</a></li>
                                <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                              </ul>
                              <hr/>
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="cost">110 €</span>
                                </li>
                              </ul>
                              <hr/>
                              <div class="product__desc">
                                <p>A quiet and cozy spa hotel is located just 80 meters from the coast. Here you can relax, relax from everyday bustle, and also undergo various strengthening programs and spa treatments. All ... </p><a class="product__link-more" href="hotel.html">Read more</a>
                              </div>
                            </div>
                            <hr class="d-none d-sm-block"/>
                            <div class="product__footer">
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="cost">110 €</span>
                                </li>
                              </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 d-flex mb-4 pb-2">
                          <div class="product bg-white product--list">
                            <div class="product__special bg-danger text-white">hot deal
                            </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="{{ asset('assets/img/hotels/item-18.jpg') }}" alt="#"/></a>
                            <div class="product__body">
                              <h4 class="product__title"><a href="hotel.html">Macronissos Village Bungalows</a></h4>
                              <div class="product__rating mb-2">
                                <div class="rating">
                                  <select class="js-rating-stat" data-current-rating="4">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4" selected="selected">4</option>
                                    <option value="5">5</option>
                                  </select>
                                </div>
                              </div>
                              <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                <li class="mr-3"><span>Cyprus</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Macronissos Village Bungalows">Show on map</a></li>
                                <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>9/10</span></li>
                              </ul>
                              <hr/>
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="sale mr-2">95 €</span><span class="cost">75 €</span>
                                </li>
                              </ul>
                              <hr/>
                              <div class="product__desc">
                                <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                              </div>
                            </div>
                            <hr class="d-none d-sm-block"/>
                            <div class="product__footer">
                              <ul class="product__price d-flex justify-content-between align-items-center">
                                <li class="mr-2"><span>Price per night from</span></li>
                                <li><span class="sale mr-2">95 €</span><span class="cost">75 €</span>
                                </li>
                              </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                  <div class="tab-pane" id="hotelReviews" role="tabpanel">
                    <section>
                      <h3 class="fw-md">Guest reviews</h3>
                      <hr class="mb-4">
                      <div class="hotel-card hotel-review">
                        <div class="row">
                          <div class="hotel-review__total col-12 col-sm-4">
                            <ul class="total d-flex mb-1">
                              <li class="total__item">8,2</li>
                              <li class="total__item">10</li>
                            </ul>
                            <p class="review">Based on  <span class="reviews">9803</span>
                              reviews
                            </p>
                            <hr>
                            <p>Guest reviews are written by our customers after their stay at Hotel Ravena</p>
                          </div>
                          <div class="hotel-review__progress col-12 col-sm-8 js-point-progress">
                            <div class="item pr-3">
                              <div class="mb-1">Comfort</div>
                              <div class="d-flex align-items-center">
                                <div class="progress progress--lg">
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
                                  </div>
                                </div><span class="fw-bold">8.2</span>
                              </div>
                            </div>
                            <div class="item pr-3">
                              <div class="mb-1">Facilities</div>
                              <div class="d-flex align-items-center">
                                <div class="progress progress--lg">
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100">
                                  </div>
                                </div><span class="fw-bold">9.3</span>
                              </div>
                            </div>
                            <div class="item pr-3">
                              <div class="mb-1">Staff</div>
                              <div class="d-flex align-items-center">
                                <div class="progress progress--lg">
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                                  </div>
                                </div><span class="fw-bold">7.6</span>
                              </div>
                            </div>
                            <div class="item pr-3">
                              <div class="mb-1">Food</div>
                              <div class="d-flex align-items-center">
                                <div class="progress progress--lg">
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                  </div>
                                </div><span class="fw-bold">8.5</span>
                              </div>
                            </div>
                            <div class="item pr-3">
                              <div class="mb-1">Price-quality ratio</div>
                              <div class="d-flex align-items-center">
                                <div class="progress progress--lg">
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
                                  </div>
                                </div><span class="fw-bold">8.2</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="hotel-card hotel-guests">
                        <ul class="hotel-guests__list">
                          <li class="comment">
                            <div class="row flex-sm-nowrap">
                              <div class="comment__left col-12 col-sm-5 col-md-4 mb-4">
                                <div class="d-flex align-items-center w-100">
                                  <div class="comment__avatar rounded-circle"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/avatar-2.jpg') }}" alt="#"/>
                                  </div>
                                  <div class="comment__right">
                                    <div class="comment__name mb-0">Jessica</div>
                                    <ul class="d-flex align-items-center">
                                      <li class="comment__flag mr-2"><img src="{{ asset('assets/img/en.png') }}" alt="#"/>
                                      </li>
                                      <li class="comment__country fz-xs">USA</li>
                                    </ul>
                                    <ul class="comment__like d-flex align-items-baseline fz-xs">
                                      <li><i class="icon icon-like-up"></i><span>17</span></li>
                                      <li><i class="icon icon-like-down"></i><span>2</span></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="comment__content col-12 col-sm-7 col-md-8">
                                <div class="pr-3">
                                  <div class="comment__meta mb-3">
                                    <ul class="row justify-content-sm-between align-items-baseline">
                                      <li class="comment__level d-flex align-items-center mb-2">
                                        <div class="badge bg-primary">9.0</div>
                                        <h4 class="level m-0">Excellent</h4>
                                      </li>
                                      <li class="comment__date mb-2"><span>Review Date:</span>
                                        <time datetime="2017-07-18">July 18, 2017</time>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="comment__desc">
                                    <div class="d-flex">
                                      <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                      <div class="content">
                                        <p>Excellent breakfast, freshly brewed coffee - specially prepared by the waiter at you. A good big hotel, beautiful design, clean, comfortable parking free at the bottom, spacious rooms.</p>
                                      </div>
                                    </div>
                                    <div class="d-flex">
                                      <div class="media-object"><i class="icon icon-minus-inside text-danger"></i></div>
                                      <div class="content">
                                        <p>Far from the center, there is no dressing gown or taprock, or shampoo.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="comment__alert alert d-flex bg-primary-light">
                                  <div class="media-object pr-3"><i class="icon icon-comments"></i></div>
                                  <div class="alert__content">
                                    <h4 class="mb-1">Ravena Hotel responded to this review</h4>
                                    <p>Dear Jessica, thank you for taking the time to leave a feedback about your stay at the Raven Hotel. Glad you liked it. We will certainly take into account your comments to make arrivals at the hotel even more comfortable.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="comment">
                            <div class="row flex-sm-nowrap">
                              <div class="comment__left col-12 col-sm-5 col-md-4 mb-4">
                                <div class="d-flex align-items-center w-100">
                                  <div class="comment__avatar rounded-circle"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/avatar-1.jpg') }}" alt="#"/>
                                  </div>
                                  <div class="comment__right">
                                    <div class="comment__name mb-0">Roman</div>
                                    <ul class="d-flex align-items-center">
                                      <li class="comment__flag mr-2"><img src="{{ asset('assets/img/ru.png') }}" alt="#"/>
                                      </li>
                                      <li class="comment__country fz-xs">Russia</li>
                                    </ul>
                                    <ul class="comment__like d-flex align-items-baseline fz-xs">
                                      <li><i class="icon icon-like-up"></i><span>17</span></li>
                                      <li><i class="icon icon-like-down"></i><span>2</span></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="comment__content col-12 col-sm-7 col-md-8">
                                <div class="pr-3">
                                  <div class="comment__meta mb-3">
                                    <ul class="row justify-content-sm-between align-items-baseline">
                                      <li class="comment__level d-flex align-items-center mb-2">
                                        <div class="badge bg-primary">9.2</div>
                                        <h4 class="level m-0">Excellent</h4>
                                      </li>
                                      <li class="comment__date mb-2"><span>Review Date:</span>
                                        <time datetime="2017-05-15">May 15, 2017</time>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="comment__desc">
                                    <div class="d-flex">
                                      <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                      <div class="content">
                                        <p>For breakfast buffet, a comfortable place for breakfast, with a large load, the staff does not have time to clean from the tables, but this will make you wait literally minutes 2. The rooms are nice, the staff is polite. And the price-quality really fit.</p>
                                      </div>
                                    </div>
                                    <div class="d-flex">
                                      <div class="media-object"><i class="icon icon-minus-inside text-danger"></i></div>
                                      <div class="content">
                                        <p>Cold in the rooms, when the heating was switched on, but the room was heated only in the middle of the night.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="comment">
                            <div class="row flex-sm-nowrap">
                              <div class="comment__left col-12 col-sm-5 col-md-4 mb-4">
                                <div class="d-flex align-items-center w-100">
                                  <div class="comment__avatar rounded-circle"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/avatar-face.jpg') }}" alt="#"/>
                                  </div>
                                  <div class="comment__right">
                                    <div class="comment__name mb-0">Andrew</div>
                                    <ul class="d-flex align-items-center">
                                      <li class="comment__flag mr-2"><img src="{{ asset('assets/img/au.png') }}" alt="#"/>
                                      </li>
                                      <li class="comment__country fz-xs">Australia</li>
                                    </ul>
                                    <ul class="comment__like d-flex align-items-baseline fz-xs">
                                      <li><i class="icon icon-like-up"></i><span>5</span></li>
                                      <li><i class="icon icon-like-down"></i><span>0</span></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="comment__content col-12 col-sm-7 col-md-8">
                                <div class="pr-3">
                                  <div class="comment__meta mb-3">
                                    <ul class="row justify-content-sm-between align-items-baseline">
                                      <li class="comment__level d-flex align-items-center mb-2">
                                        <div class="badge bg-primary">7.3</div>
                                        <h4 class="level m-0">Good</h4>
                                      </li>
                                      <li class="comment__date mb-2"><span>Review Date:</span>
                                        <time datetime="2017-05-10">May 10, 2017</time>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="comment__desc">
                                    <div class="d-flex">
                                      <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                      <div class="content">
                                        <p>The hotel is located far from the city center, but the metro is close, about 7 minutes on foot, is a yellow branch that will take you directly to Duomo Square. Very well equipped large room, which has everything for a comfortable stay.</p>
                                      </div>
                                    </div>
                                    <div class="d-flex">
                                      <div class="media-object"><i class="icon icon-minus-inside text-danger"></i></div>
                                      <div class="content">
                                        <p>At breakfast a lot of people, crush, however, the waiters were attentive and managed to somehow arrange all.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="comment">
                            <div class="row flex-sm-nowrap">
                              <div class="comment__left col-12 col-sm-5 col-md-4 mb-4">
                                <div class="d-flex align-items-center w-100">
                                  <div class="comment__avatar rounded-circle"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/avatar-3.jpg') }}" alt="#"/>
                                  </div>
                                  <div class="comment__right">
                                    <div class="comment__name mb-0">Chris</div>
                                    <ul class="d-flex align-items-center">
                                      <li class="comment__flag mr-2"><img src="{{ asset('assets/img/au.png') }}" alt="#"/>
                                      </li>
                                      <li class="comment__country fz-xs">Australia</li>
                                    </ul>
                                    <ul class="comment__like d-flex align-items-baseline fz-xs">
                                      <li><i class="icon icon-like-up"></i><span>19</span></li>
                                      <li><i class="icon icon-like-down"></i><span>2</span></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="comment__content col-12 col-sm-7 col-md-8">
                                <div class="pr-3">
                                  <div class="comment__meta mb-3">
                                    <ul class="row justify-content-sm-between align-items-baseline">
                                      <li class="comment__level d-flex align-items-center mb-2">
                                        <div class="badge bg-primary">9.4</div>
                                        <h4 class="level m-0">Excellent</h4>
                                      </li>
                                      <li class="comment__date mb-2"><span>Review Date:</span>
                                        <time datetime="2017-05-10">May 10, 2017</time>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="comment__desc">
                                    <div class="d-flex">
                                      <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                      <div class="content">
                                        <p>The hotel is located far from the city center, but the metro is close, about 7 minutes on foot, is a yellow branch that will take you directly to Duomo Square. Very well equipped large room, which has everything for a comfortable stay.</p>
                                      </div>
                                    </div>
                                    <div class="d-flex">
                                      <div class="media-object"><i class="icon icon-minus-inside text-danger"></i></div>
                                      <div class="content">
                                        <p>At breakfast a lot of people, crush, however, the waiters were attentive and managed to somehow arrange all.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="comment">
                            <div class="row flex-sm-nowrap">
                              <div class="comment__left col-12 col-sm-5 col-md-4 mb-4">
                                <div class="d-flex align-items-center w-100">
                                  <div class="comment__avatar rounded-circle"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/avatar-1.jpg') }}" alt="#"/>
                                  </div>
                                  <div class="comment__right">
                                    <div class="comment__name mb-0">Roman</div>
                                    <ul class="d-flex align-items-center">
                                      <li class="comment__flag mr-2"><img src="{{ asset('assets/img/ru.png') }}" alt="#"/>
                                      </li>
                                      <li class="comment__country fz-xs">Russia</li>
                                    </ul>
                                    <ul class="comment__like d-flex align-items-baseline fz-xs">
                                      <li><i class="icon icon-like-up"></i><span>17</span></li>
                                      <li><i class="icon icon-like-down"></i><span>2</span></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="comment__content col-12 col-sm-7 col-md-8">
                                <div class="pr-3">
                                  <div class="comment__meta mb-3">
                                    <ul class="row justify-content-sm-between align-items-baseline">
                                      <li class="comment__level d-flex align-items-center mb-2">
                                        <div class="badge bg-primary">9.2</div>
                                        <h4 class="level m-0">Excellent</h4>
                                      </li>
                                      <li class="comment__date mb-2"><span>Review Date:</span>
                                        <time datetime="2017-05-05">May 05, 2017</time>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="comment__desc">
                                    <div class="d-flex">
                                      <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                      <div class="content">
                                        <p>For breakfast buffet, a comfortable place for breakfast, with a large load, the staff does not have time to clean from the tables, but this will make you wait literally minutes 2. The rooms are nice, the staff is polite. And the price-quality really fit.</p>
                                      </div>
                                    </div>
                                    <div class="d-flex">
                                      <div class="media-object"><i class="icon icon-minus-inside text-danger"></i></div>
                                      <div class="content">
                                        <p>Cold in the rooms, when the heating was switched on, but the room was heated only in the middle of the night.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="comment">
                            <div class="row flex-sm-nowrap">
                              <div class="comment__left col-12 col-sm-5 col-md-4 mb-4">
                                <div class="d-flex align-items-center w-100">
                                  <div class="comment__avatar rounded-circle"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/avatar-3.jpg') }}" alt="#"/>
                                  </div>
                                  <div class="comment__right">
                                    <div class="comment__name mb-0">Chris</div>
                                    <ul class="d-flex align-items-center">
                                      <li class="comment__flag mr-2"><img src="{{ asset('assets/img/au.png') }}" alt="#"/>
                                      </li>
                                      <li class="comment__country fz-xs">Australia</li>
                                    </ul>
                                    <ul class="comment__like d-flex align-items-baseline fz-xs">
                                      <li><i class="icon icon-like-up"></i><span>19</span></li>
                                      <li><i class="icon icon-like-down"></i><span>2</span></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="comment__content col-12 col-sm-7 col-md-8">
                                <div class="pr-3">
                                  <div class="comment__meta mb-3">
                                    <ul class="row justify-content-sm-between align-items-baseline">
                                      <li class="comment__level d-flex align-items-center mb-2">
                                        <div class="badge bg-primary">9.4</div>
                                        <h4 class="level m-0">Excellent</h4>
                                      </li>
                                      <li class="comment__date mb-2"><span>Review Date:</span>
                                        <time datetime="2017-05-05">May 05, 2017</time>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="comment__desc">
                                    <div class="d-flex">
                                      <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                      <div class="content">
                                        <p>The hotel is located far from the city center, but the metro is close, about 7 minutes on foot, is a yellow branch that will take you directly to Duomo Square. Very well equipped large room, which has everything for a comfortable stay.</p>
                                      </div>
                                    </div>
                                    <div class="d-flex">
                                      <div class="media-object"><i class="icon icon-minus-inside text-danger"></i></div>
                                      <div class="content">
                                        <p>At breakfast a lot of people, crush, however, the waiters were attentive and managed to somehow arrange all.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="comment">
                            <div class="row flex-sm-nowrap">
                              <div class="comment__left col-12 col-sm-5 col-md-4 mb-4">
                                <div class="d-flex align-items-center w-100">
                                  <div class="comment__avatar rounded-circle"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/avatar-2.jpg') }}" alt="#"/>
                                  </div>
                                  <div class="comment__right">
                                    <div class="comment__name mb-0">Jessica</div>
                                    <ul class="d-flex align-items-center">
                                      <li class="comment__flag mr-2"><img src="{{ asset('assets/img/en.png') }}" alt="#"/>
                                      </li>
                                      <li class="comment__country fz-xs">USA</li>
                                    </ul>
                                    <ul class="comment__like d-flex align-items-baseline fz-xs">
                                      <li><i class="icon icon-like-up"></i><span>17</span></li>
                                      <li><i class="icon icon-like-down"></i><span>2</span></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="comment__content col-12 col-sm-7 col-md-8">
                                <div class="pr-3">
                                  <div class="comment__meta mb-3">
                                    <ul class="row justify-content-sm-between align-items-baseline">
                                      <li class="comment__level d-flex align-items-center mb-2">
                                        <div class="badge bg-primary">9.0</div>
                                        <h4 class="level m-0">Excellent</h4>
                                      </li>
                                      <li class="comment__date mb-2"><span>Review Date:</span>
                                        <time datetime="2017-05-29">April 29, 2017</time>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="comment__desc">
                                    <div class="d-flex">
                                      <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                      <div class="content">
                                        <p>Excellent breakfast, freshly brewed coffee - specially prepared by the waiter at you. A good big hotel, beautiful design, clean, comfortable parking free at the bottom, spacious rooms.</p>
                                      </div>
                                    </div>
                                    <div class="d-flex">
                                      <div class="media-object"><i class="icon icon-minus-inside text-danger"></i></div>
                                      <div class="content">
                                        <p>Far from the center, there is no dressing gown or taprock, or shampoo.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="comment">
                            <div class="row flex-sm-nowrap">
                              <div class="comment__left col-12 col-sm-5 col-md-4 mb-4">
                                <div class="d-flex align-items-center w-100">
                                  <div class="comment__avatar rounded-circle"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/avatar-4.jpg') }}" alt="#"/>
                                  </div>
                                  <div class="comment__right">
                                    <div class="comment__name mb-0">Maddalena</div>
                                    <ul class="d-flex align-items-center">
                                      <li class="comment__flag mr-2"><img src="{{ asset('assets/img/it.png') }}" alt="#"/>
                                      </li>
                                      <li class="comment__country fz-xs">Italy</li>
                                    </ul>
                                    <ul class="comment__like d-flex align-items-baseline fz-xs">
                                      <li><i class="icon icon-like-up"></i><span>15</span></li>
                                      <li><i class="icon icon-like-down"></i><span>1</span></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="comment__content col-12 col-sm-7 col-md-8">
                                <div class="pr-3">
                                  <div class="comment__meta mb-3">
                                    <ul class="row justify-content-sm-between align-items-baseline">
                                      <li class="comment__level d-flex align-items-center mb-2">
                                        <div class="badge bg-primary">9.5</div>
                                        <h4 class="level m-0">Excellent</h4>
                                      </li>
                                      <li class="comment__date mb-2"><span>Review Date:</span>
                                        <time datetime="2017-05-25">April 25, 2017</time>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="comment__desc">
                                    <div class="d-flex">
                                      <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                      <div class="content">
                                        <p>&quot;Very clean, nice, stylish. From the metro 10 min walk Similar hotels usually cost many times more expensive. Huge bed, towels, everything you need. Cleaning once a day. The breakfast is excellent, the coffee is prepared by the barista - the first time I meet this at the hotel.&quot;</p>
                                      </div>
                                    </div>
                                    <div class="d-flex">
                                      <div class="media-object"><i class="icon icon-minus-inside text-danger"></i></div>
                                      <div class="content">
                                        <p>Far from the center, there is no dressing gown or taprock, or shampoo.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <nav class="pagination-nav" aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item align-self-end d-sm-none"><a class="dotted" href="#">......</a>
                            </li>
                            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">6</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">7</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">8</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a></li>
                          </ul>
                        </nav>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
      </div>
    </main>
   
    <div class="blueimp-gallery gallery-modal" id="blueimp-gallery">
      <div class="slides"></div>
      <div class="gallery-modal__bottom js-gallery-modal-panel">
        <div class="container bg-white shadow-sm">
          <div class="gallery-modal__info d-sm-flex text-center text-sm-left">
            <div class="description flex-grow-1"></div><a class="toggle-thumbs d-block text-nowrap" href="#galleryThumbs" data-toggle="collapse" aria-expanded="true"><i class="fa fa-angle-down ml-1"></i></a>
          </div>
          <div class="collapse show" id="galleryThumbs">
            <div class="gallery-modal__thumbs swiper-container js-gallery-modal-thumbs">
              <ol class="indicator swiper-wrapper"></ol>
            </div>
          </div>
        </div>
        <button class="btn-toggle btn btn-light close" type="button"><span class="icon-bar"></span></button>
      </div><a class="prev" href="#"></a><a class="next" href="#"></a>
    </div>
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
  
  </body>
</html>
</div>