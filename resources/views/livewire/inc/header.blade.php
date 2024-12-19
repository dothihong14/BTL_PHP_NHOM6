<div>
    <header class="page-header">
        <div class="panel-fixed">
            <div class="page-header__top bg-white js-header-top js-top-panel">
                <div class="container">
                    <div class="row justify-content-center justify-content-between">
                        <div class="col-12 col-md col-lg-3 d-flex justify-content-center justify-content-md-start"><a
                                class="navbar-logo d-inline-flex align-items-center" href="/"><img
                                    class="img-fluid mr-3" src="{{ asset('MELIA.png') }}" alt="#" style="
                                    height: 100px;
                                " />
                                <h4 class="m-0" style="text-wrap:nowrap;">KHÁCH SẠN MELIA</h4>
                            </a></div>
                        <div class="col col-lg-6 d-none d-md-flex align-items-center justify-content-center"><a
                                class="page-header__call d-flex align-items-center text-nowrap"
                                href="tel:880000112222333"><i class="icon icon-call js-tooltip-call mr-3"
                                    data-toggle="tooltip" data-placement="bottom"
                                    title="Hỗ trợ 19006868"></i>
                                <div class="page-header__call-right">
                                    <div class="title fz-small">Hỗ trợ</div>
                                    <div class="phone fw-bold">19006868</div>
                                </div>
                            </a>
                            <div class="page-header__top-search d-none d-lg-block ml-4" id="navbarSearch">
                                <form class="navbar-search" action="{{ route('hotels') }}" method="GET">
                                    <div class="input-group flex-nowrap">
                                        <input class="form-control pr-0 js-navbar-search-input" type="search"
                                            name="search_keyword" placeholder="Tìm kiếm trên trang web" />
                                        <div class="input-group-append">
                                            <button class="navbar-search__subject btn btn-light" type="submit">
                                                <i class="fa fa-search text-gray"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="col col-lg-3 d-none d-md-flex">
                            <ul class="nav nav-panel">
                                @if ($loggedInUser)
                                    <li class="nav-item d-flex">
                                        <span class="nav-link btn btn-light">{{ $loggedInUser->name }}</span>
                                    </li>
                                    <li class="nav-item d-flex">
                                        <a class="nav-link btn btn-light" href="{{ route('order.history') }}"><i class="text-gray icon icon-history mr-2"></i><span>Lịch sử đơn hàng</span></a>
                                    </li>
                                    <li class="nav-item d-flex">
                                        <button class="nav-link btn btn-light" wire:click="logout"><i class="text-gray icon icon-logout mr-2"></i><span>Đăng xuất</span></button>
                                    </li>
                                @else
                                    <li class="nav-item d-flex">
                                        <a class="nav-link btn btn-light js-toggle-account" href="#modalAccount" data-toggle="modal" role="button" data-account="login"><i class="text-gray icon icon-user mr-2"></i><span>Đăng nhập</span></a>
                                    </li>
                                    <li class="nav-item d-flex">
                                        <a class="nav-link btn btn-light js-toggle-account" href="#modalAccount" data-toggle="modal" role="button" data-account="regist"><i class="text-gray icon icon-login mr-2"></i><span>Đăng ký</span></a>
                                    </li>
                                @endif
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn-toggle btn btn-light d-lg-none btn-toggle-nav" type="button" data-toggle="collapse"
            data-target="#navPanel"><span class="icon-bar"></span></button>
        <nav class="main-nav d-flex collapse d-lg-block" id="navPanel">
            <div class="main-nav__container d-flex">
                <div class="container">
                    <div class="d-lg-none">
                        <div class="main-nav__search">
                            <form class="navbar-search" action="#" method="GET">
                                <div class="input-group flex-nowrap">
                                    <input class="form-control pr-0 js-navbar-search-input" type="search"
                                        placeholder="Tìm kiếm trên trang web" />
                                    <div class="input-group-append">
                                        <button class="navbar-search__subject btn btn-light" type="button"><i
                                                class="fa fa-search text-gray"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <ul class="nav nav-panel">
                            <li class="nav-item d-flex"><a class="nav-link btn btn-light js-toggle-account"
                                    href="#modalAccount" data-toggle="modal" role="button" data-account="login"><i
                                        class="text-gray icon icon-user mr-2"></i><span>Đăng nhập</span></a>
                            </li>
                            <li class="nav-item d-flex"><a class="nav-link btn btn-light js-toggle-account"
                                    href="#modalAccount" data-toggle="modal" role="button" data-account="regist"><i
                                        class="text-gray icon icon-login mr-2"></i><span>Đăng ký</span></a>
                            </li>
                        </ul>
                    </div>
                    <ul class="main-nav__list nav d-flex" id="navMenu">
                      <li class="nav-item">
                          <a class="nav-link fw-bold text-uppercase" href="{{ route('home') }}">
                              <span>Trang chủ</span>
                          </a>
                      </li>
                  
                      <li class="nav-item">
                          <a class="nav-link fw-bold text-uppercase" href="{{ route('hotels') }}">
                              <span>Khách sạn</span>
                          </a>
                      </li>
                  
                      @foreach ($locations as $location)
                          <li class="nav-item">
                              <a class="nav-link fw-bold text-uppercase" href="{{ route('hotels', ['location_id' => $location->id]) }}">
                                  <span>{{ $location->name }}</span>
                              </a>
                          </li>
                      @endforeach
                  
                      <li class="nav-item">
                          <a class="nav-link fw-bold text-uppercase" href="{{ route('blog.index') }}">
                              <span>Bài viết</span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link fw-bold text-uppercase" href="{{ route('about.us') }}">
                              <span>Về chúng tôi</span>
                          </a>
                      </li>
                  
                      <li class="nav-item">
                          <a class="nav-link fw-bold text-uppercase" href="{{ route('contact') }}">
                              <span>Liên hệ</span>
                          </a>
                      </li>
                  </ul>
                  
                  
                </div>
            </div>
        </nav>
    </header>
</div>
