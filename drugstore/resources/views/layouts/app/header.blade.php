@php
$totalpro = 0;
@endphp
<header class="header bg-white fs-7 sticky-top shadow-sm" id='header'>
<div class="container">
    <div class="row align-items-center">
        <div class="col-xl-3 col-sm-12">
            <div class="position-absolute m-3 d-xl-none">
                <img src="/img/Mask Group 69.png" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            </div>
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style='width:50%'>
                <div class="offcanvas-header">
                    <img class="w-50" src="/img/logobr/Logo_de_Free.png">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body bg-color-5 pt-0">
                    <div
                        class="offcanvas__menu-item d-flex justify-content-start border-bottom border-color-11">
                        <li class="list-unstyled py-3 my-1 "><a href="{{ url('') }}"
                                class="color-1 text-decoration-none text-black menu__item__left__name"
                                id='homepage'>Trang chủ</a></li>
                    </div>
                    <div
                        class="offcanvas__menu-item d-flex justify-content-between border-bottom border-color-11">
                        <li class="list-unstyled py-3 my-1 "><a href="{{ url('cart') }}"
                                class="text-black text-decoration-none menu__item__left__name">Giỏ hàng
                            </a></li>
                    </div>
                    <div
                        class="offcanvas__menu-item d-flex justify-content-between border-bottom border-color-11">
                        <li class="list-unstyled py-3 my-1 "><a href="{{ url('bai-viet') }}"
                                class="text-black text-decoration-none menu__item__left__name">Góc sức khỏe</a>
                        </li>
                    </div>
                    <div
                        class="offcanvas__menu-item d-flex justify-content-between border-bottom border-color-11">
                        <li class="list-unstyled py-3 my-1"><a href="{{ url('products') }}"
                                class="text-black text-decoration-none menu__item__left__name">Tất cả sản phẩm</a></li>
                    </div>
                    <div
                        class="offcanvas__menu-item d-flex justify-content-between border-bottom border-color-11">
                        <li class="list-unstyled py-3 my-1"><a href="{{ url('products/index-functional') }}"
                                class="text-black text-decoration-none menu__item__left__name">Thực phẩm chức năng</a></li>
                    </div>
                    <div
                        class="offcanvas__menu-item d-flex justify-content-between border-bottom border-color-11">
                        <li class="list-unstyled py-3 my-1"><a href="{{ url('products/index-medicine') }}"
                                class="text-black text-decoration-none menu__item__left__name">Tất cả loại thuốc</a></li>
                    </div>
                    <div
                        class="offcanvas__menu-item d-flex justify-content-between border-bottom border-color-11">
                        <li class="list-unstyled py-3 my-1"><a href="{{ url('products/index-instrument') }}"
                                class="text-black text-decoration-none menu__item__left__name">Thiết bị - dụng cụ y tế</a></li>
                    </div>
                    <div
                        class="offcanvas__menu-item d-flex justify-content-between border-bottom border-color-11">
                        <li class="list-unstyled py-3 my-1"><a href="{{ url('introduct') }}"
                                class="text-black text-decoration-none menu__item__left__name">Giới thiệu</a></li>
                    </div>
                    <div
                        class="offcanvas__menu-item d-flex justify-content-start border-bottom border-color-11">
                        <li class="list-unstyled py-3 my-1 "><a href="{{ url('lien-he') }}"
                                class="text-black text-decoration-none menu__item__left__name ">Liên hệ</a></li>
                    </div>
                    <div
                        class="offcanvas__menu-item d-flex justify-content-start border-bottom border-color-11">
                        <li class="list-unstyled py-3 my-1 ">
                            @if (Auth::check())
                        <li class="dropdown list-unstyled">
                            <a  class="nav-link active dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false" style="cursor: pointer">
                                Xin chào {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('profileuser') }}">Thông tin cá
                                        nhân</a></li>
                                <li><a class="dropdown-item py-3" href="#!"
                                        onclick="document.getElementById('logout-form').submit()">Đăng
                                        xuất</a>
                                    <form method="POST" action="{{ url('logout') }}" id="logout-form">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item list-unstyled">
                            <a class="fw-4 py-3 nav-link active" aria-current="page"
                                href="{{ url('login') }}">Đăng
                                nhập</a>
                        </li>
                        @endif
                    </div>
                </div>
                <div class="offcanvas-header d-flex justify-content-center align-items-center bg-color-1">
                    <div class="d-flex">
                        <img src="/img/phone.svg">
                        <h5 class="text-white m-0 ms-2">0999.999.999</h5>
                    </div>
                </div>
            </div>
            <div class="header__logo">
                <a class='d-flex justify-content-center' href='{{ url('') }}'><img class='w-50 h-50'
                        src="/img/logobr/Logo_de_Free.png"></a>
            </div>
        </div>

        <div class="col-xl-9">
            <div class="">
                <div class="contact border-bottom py-2">
                    <div class="d-flex justify-content-between">
                        <div class="contact__left d-none d-sm-block">
                            <div class="d-flex">
                                <div class="contact__left__email me-3 pe-1">
                                    <a class="email-icon text-decoration-none color-7 fs-7" href="">
                                        <img class="me-1" src="/img/mail.svg"
                                            class="me-1">ngotu161@gmail.com
                                    </a>
                                </div>
                                <div class="contact__left__location me-3 pe-1">
                                    <a class="location-icon text-decoration-none color-7 fs-7" href="">
                                        <img src="/img/location.svg" class="me-1">Địa chỉ
                                    </a>
                                </div>
                                <div class="contact__left__laguague me-3 pe-1">
                                    <a class="laguegue-icon text-decoration-none color-7 fs-7" href="">
                                        <img src="/img/Mask Group 96.svg" class="me-1">Ngôn ngữ</a>
                                </div>
                            </div>
                        </div>
                        <div class="contact__right d-none d-sm-block">
                            <div class="contact__right__phone-number">
                                GỌI CHO CHÚNG TÔI:
                                <a href="" class="text-decoration-none fs-7 color-6">0999.999.999</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="menu my-3 py-1">
                        <div class=" d-block d-xl-flex  justify-content-between">
                            <div class="menu__item__left">
                                <div class="d-flex justify-content-sm-center">
                                    <div class="d-none d-sm-block me-3 pe-1" type="button"
                                        aria-expanded="false">
                                        <a class="menu__item__left__name text-decoration-none fw-semibold text-black  fs-7"
                                            data-toggle="tab" href="{{ url('') }}">
                                            Trang chủ
                                        </a>
                                    </div>
                                    <div class="d-none d-sm-block me-3 pe-1" type="button"
                                        aria-expanded="false">
                                        <a class="menu__item__left__name text-decoration-none fw-semibold text-black  fs-7"
                                            data-toggle="tab" href="{{ url('introduct') }}">
                                            Giới thiệu
                                        </a>
                                    </div>
                                    <div class="d-none d-sm-block me-3 dropdown">
                                        <div class="dropdown-toggle" type='button' data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <a class="menu__item__left__name text-decoration-none fw-semibold text-black fs-7"  href="{{ url('products') }}"
                                                class="header__bottom__item__name__show fw-4 fs-7 text-black text-decoration-none m-0">
                                                Sản phẩm
                                            </a>
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"  href="{{ url('products') }}">Tất cả sản phẩm</a></li>
                                            <li><a class="dropdown-item"  href="{{ url('products/index-medicine') }}">Tất cả loại thuốc</a></li>
                                            <li><a class="dropdown-item"  href="{{ url('products/index-functional') }}">Thực phẩm chức năng</a></li>
                                            <li><a class="dropdown-item"  href="{{ url('products/index-instrument') }}">Thiết bị - dụng cụ y tế</a></li>
                                        </ul>
                                    </div>
                                    <div class="d-none d-sm-block me-3 dropdown" type="button"
                                        aria-expanded="false">
                                        <a class="menu__item__left__name text-decoration-none fw-semibold text-black fs-7"
                                            data-toggle="tab" href="{{ url('bai-viet') }}">
                                            Góc sức khỏe
                                        </a>
                                    </div>
                                    <div class="d-none d-sm-block me-3 dropdown" type="button"
                                        aria-expanded="false">
                                        <a class="menu__item__left__name text-decoration-none fw-semibold text-black fs-7"
                                            data-toggle="tab" href="{{ url('lien-he') }}">
                                            Liên hệ
                                        </a>
                                    </div>
                                    <div class="d-none d-sm-block me-3 dropdown" type="button"
                                        aria-expanded="false">
                                        <a class="menu__item__left__name text-decoration-none fw-semibold text-black fs-7"
                                            data-toggle="tab" href="{{ url('cart') }}">
                                            @if (session('cart'))
                                                @foreach (session('cart') as $id => $products)
                                                    @php
                                                        
                                                        $totalpro += $products['quantity'];
                                                    @endphp
                                                @endforeach
                                                {{ $totalpro }}

                                            @endif
                                            <i class="bi bi-cart">
                                            </i> Giỏ hàng
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu__item_right">
                                <div class="d-flex">
                                    <div class="menu__item__left__search d-none d-xl-block p-0 m-0">
                                        @if (Auth::check())
                                            <li class="dropdown list-unstyled">
                                                <a class="nav-link active dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    style="cursor: pointer">
                                                    Xin chào {{ Auth::user()->name }}
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ url('profileuser') }}">Thông tin cá
                                                            nhân</a></li>
                                                    <li><a class="dropdown-item" href="#!"
                                                            onclick="document.getElementById('logout-form').submit()">Đăng
                                                            xuất</a>
                                                        <form method="POST" action="{{ url('logout') }}"
                                                            id="logout-form">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        @else
                                            <li class="nav-item list-unstyled">
                                                <a class="fw-4 nav-link active" aria-current="page"
                                                    href="{{ url('login') }}">Đăng
                                                    nhập</a>
                                            </li>
                                        @endif
                                    </div>
                                    <div class="d-none d-sm-flex ps-2 ms-2  border-start">
                                        <div class="menu__item_right__facebook me-2">
                                            <a href="#">
                                                <img src="/img/Group 13483.svg">
                                            </a>
                                        </div>
                                        <div class="menu__item_right__instagram  me-2">
                                            <a href="#">
                                                <img src="/img/Group 13482.svg">
                                            </a>
                                        </div>
                                        <div class="menu__item_right__twitter  me-2">
                                            <a href="#">
                                                <img src="/img/Group 13481.svg">
                                            </a>
                                        </div>
                                        <div class="menu__item_right__google">
                                            <a href="#">
                                                <img src="/img/Group 13480.svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>