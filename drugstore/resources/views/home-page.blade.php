@extends('layouts.app.master')

{{-- Đặt title cho page --}}
@section('title', 'Trang chủ')

{{-- Đặt file css cho page --}}
@section('file', 'home-page')

{{-- Đặt class cho body --}}
@section('page', 'home-page')

@section('content')
    <div class='header-menu bg-color-5'>
        <div class='container align-items-center'>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-3 m-0">
                    <li class="breadcrumb-item fs-7" id='breadcrumb-item'><a
                            class=' d-inline-block text-decoration-none
                    text-black'
                            href='{{ url('') }}'>Trang
                            chủ</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <main class="main px-xl-5 mx-xl-5">
        <div class="row">
            <div class="col-xl-3 col-12 mt-4 mt-xl-0">
                <div id="simple-list-example"
                    class="maps bg-white overflow-hidden d-flex flex-column gap-0 simple-list-example-scrollspy">
                    <a class="maps__item ms-2 position-relative p-1 fs-6 color-7 text-decoration-none fw-4 border-start"
                        href="#simple-list-item-1">
                        <h6 class="p-3 m-0">Giới thiệu chung</h6>
                    </a>
                    <a class="maps__item ms-2 position-relative p-1 fs-6 color-7 text-decoration-none fw-4 border-start"
                        href="#simple-list-item-2">
                        <h6 class="p-3 m-0">Thuốc</h6>
                    </a>
                    <a class="maps__item ms-2 position-relative p-1 fs-6 color-7 text-decoration-none fw-4 border-start"
                        href="#simple-list-item-3">
                        <h6 class="p-3 m-0">Thực phẩm chức năng</h6>
                    </a>
                    <a class="maps__item ms-2 position-relative p-1 fs-6 color-7 text-decoration-none fw-4 border-start"
                        href="#simple-list-item-4">
                        <h6 class="p-3 m-0">Thiết bị - dụng cụ ý tế</h6>
                    </a>
                    <a class="maps__item ms-2 position-relative p-1 fs-6 color-7 text-decoration-none fw-4 border-start"
                        href="#simple-list-item-5">
                        <h6 class="p-3 m-0">Nguồn gốc sản phẩm</h6>
                    </a>
                    <a class="maps__item ms-2 position-relative p-1 fs-6 color-7 text-decoration-none fw-4 border-start"
                        href="#simple-list-item-6">
                        <h6 class="p-3 m-0">Góc sức khỏe</h6>
                    </a>
                    <a class="maps__item ms-2 position-relative p-1 fs-6 color-7 text-decoration-none fw-4 border-start"
                        href="#simple-list-item-7">
                        <h6 class="p-3 m-0">Công ty dược phẩm liên kết</h6>
                    </a>
                </div>
            </div>
            <div class="col-xl-9 col-12">
                <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0"
                    data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                    <div class="slidebanner owl-carousel owl-theme position-relative">
                        <div class="item">
                            <h4><img src="img/bigbannertop.png"></h4>
                        </div>
                        <div class="item">
                            <h4><img src="img/bigbannertop.png"></h4>
                        </div>
                        <div class="item">
                            <h4><img src="img/bigbannertop.png"></h4>
                        </div>
                        <div class="item">
                            <h4><img src="img/bigbannertop.png"></h4>
                        </div>
                        <div class="item">
                            <h4><img src="img/bigbannertop.png"></h4>
                        </div>
                    </div>
                    <div class="intro-video pt-xl-5 mt-4" id='simple-list-item-1'>
                        <div class="row py-xl-2 pb-5 align-items-center">
                            <div class="col-xl-6 col-12">
                                <div class="intro-video__clip position-relative mb-4">
                                    <img src="/img/articleimage.jfif" class="d-block w-100">
                                </div>
                            </div>
                            <div class="col-xl-6 col-12">
                                <div class="intro-video__content">
                                    <h2 class="color-1 mb-4 fw-4 under-line position-relative">Nhà thuốc ABC</h2>
                                    <p class="color-7 fs-7 mt-4 mt-3">Nhà thuốc ABC - thành viên của tập đoàn Nhà Thuốc Thế
                                        Giới (DSW)
                                        là một
                                        trong những chuỗi bán lẻ uy tín hàng đầu tại Việt Nam với hơn 200 năm tận tâm phục
                                        vụ.
                                        Chuỗi nhà thuốc ABC (tiền thân là nhà thuốc CBA) được thành lập năm 1850.
                                        Năm 2010 nhà thuốc CBA chính thức là thành viên của tập đoàn Nhà Thuốc Thế Giới với
                                        20 nhà thuốc
                                        tại TP. Hồ Chí Minh và đổi tên thành Nhà thuốc ABC
                                        với bộ nhận diện thương hiệu mới thuộc Nhà Thuốc Thế Giới, đến nay hệ thống đã có
                                        hơn 1500 nhà
                                        thuốc đạt chuẩn GPP rải khắp các tỉnh thành Bắc - Trung - Nam.
                                        Nhà thuốc ABC chuyên cung cấp đa dạng các loại dược phẩm, sản phẩm thực phẩm chức
                                        năng, trang
                                        thiết bị y tế, dược mỹ phẩm cùng nhiều sản phẩm chăm sóc sức khoẻ, tiêu dùng hàng
                                        ngày,....</p>
                                    </p>
                                    <p class="color-7 mb-xl-3 mb-4 fs-7">
                                        Tất cả các Nhà thuốc trực thuộc hệ thống đều đạt chuẩn Thực hành thuốc tốt – GPP,
                                        với đội ngũ dược sĩ có chuyên môn và giàu kinh nghiệm. Cam kết phục vụ theo 4 tiêu
                                        chí:</p>
                                    </p>
                                    <a href='{{ url('introduct') }}' class='text-decoration-none'><button
                                            class="btn px-3 border border-color-1 rounded-10 bg-color-1 text-white intro-video__content__more-button">Tìm
                                            hiểu thêm</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="medicine pt-xl-5 mt-4" id='simple-list-item-2'>
                        <h2 class='under-line between-line fw-4 color-1 m-0 position-relative text-center'>Thuốc</h2>
                        <div class="mb-4">
                            <div class="banner-product owl-carousel pt-4 mt-3 owl-theme position-relative">
                                <div class="">
                                    <img class="w-100" src="/img/bannerMedicine.png">
                                </div>
                                <div class="">
                                    <img class="w-100" src="/img/bannerMedicine2.png">
                                </div>
                            </div>
                            <div class="products__slide owl-carousel pt-4 mt-3 owl-theme position-relative">
                                @foreach ($productMedicine as $Medicine)
                                    <div class='rounded-10 shadow-sm h-100'>
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div class="">
                                                <a class="text-decoration-none"
                                                    href="{{ url("products/{$Medicine->id}") }}">
                                                    <div
                                                        class="img-hover-zoom rounded-10 rounded-bottom-0 ratio ratio-16x9 ratio ratio-16x9 ratio ratio-16x9 ratio ratio-16x9">
                                                        <img class="w-100"
                                                            src="{{ Storage::disk('productimg')->url($Medicine->file_name) }}">
                                                    </div>
                                                </a>
                                                <div class='p-3'>
                                                    <a class="text-decoration-none"
                                                        href="{{ url("products/{$Medicine->id}") }}">
                                                        <h5 class='text-black m-0 fs-5 fw-4 mb-2 text-hover-uppercase'>
                                                            {{ $Medicine->name }}
                                                        </h5>
                                                    </a>
                                                    <div class='mb-2 d-flex align-items-baseline'>
                                                        <span class='fs-7 color-7 m-0'>{{ $Medicine->benefit }}
                                                        </span>
                                                    </div>
                                                    <div class='mb-2 d-flex align-items-baseline'>
                                                        <span class='fs-7 color-7 m-0'>Số lượng còn lại:
                                                            <span class='text-black fw-4'>{{ $Medicine->quantity }}</span>
                                                        </span>
                                                    </div>
                                                    <div class='d-flex align-items-baseline'>
                                                        <div class="me-1">
                                                            <img class='img--initial' src='/img/Mask Group 224.svg'>
                                                        </div>
                                                        <span class='fs-7 color-7 m-0'>Giá:
                                                            <span class='text-black fw-4'>
                                                                @money($Medicine->price) VNĐ
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center w-100 pb-3">
                                                @if ($Medicine->quantity == 0)
                                                    <div class="w-50">
                                                        <button class="rounded-10 bg-danger py-2 px-3 border-danger w-100">
                                                            Hết hàng
                                                        </button>
                                                    </div>
                                                @else
                                                    <a class="w-50" href="{{ route('addcart', [$Medicine->id]) }}"
                                                        type="submit">
                                                        <button
                                                            class="rounded-10 py-2 px-3 border-black w-100 button--hover">Chọn
                                                            mua
                                                        </button>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a class="text-decoration-none" href="{{ url('products/index-medicine') }}"><button
                                    class="btn--color-1 rounded-pill py-2 px-3">Xem tất cả thuốc</button></a>
                        </div>
                    </div>
                    <div class="functional pt-xl-5 mt-4" id='simple-list-item-3'>
                        <h2 class='under-line between-line fw-4 color-1 m-0 position-relative text-center'>Thực phẩm chức
                            năng</h2>
                        <div class="mb-4">
                            <div class="banner-product owl-carousel pt-4 mt-3 owl-theme position-relative">
                                <div class="">
                                    <img class="w-100" src="/img/bannerfunctional.png">
                                </div>
                                <div class="">
                                    <img class="w-100" src="/img/bannerfunctional1.png">
                                </div>
                                <div class="">
                                    <img class="w-100" src="/img/bannerfunctional2.png">
                                </div>
                                <div class="">
                                    <img class="w-100" src="/img/bannerfunctional3.png">
                                </div>
                                <div class="">
                                    <img class="w-100" src="/img/bannerfunctional4.png">
                                </div>
                            </div>
                            <div class="products__slide owl-carousel pt-4 mt-3 owl-theme position-relative">
                                @foreach ($productFunctional as $Functional)
                                    <div class='rounded-10 shadow-sm h-100'>
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <a class="text-decoration-none"
                                                    href="{{ url("products/{$Functional->id}") }}">
                                                    <div
                                                        class="img-hover-zoom rounded-10 rounded-bottom-0 ratio ratio-16x9 ratio ratio-16x9 ratio ratio-16x9 ratio ratio-16x9">
                                                        <img class="w-100"
                                                            src="{{ Storage::disk('productimg')->url($Functional->file_name) }}">
                                                    </div>
                                                </a>
                                                <div class='p-3'>
                                                    <a class="text-decoration-none"
                                                        href="{{ url("products/{$Functional->id}") }}">
                                                        <h5 class='text-black m-0 fs-5 fw-4 mb-2 text-hover-uppercase'>
                                                            {{ $Functional->name }}
                                                        </h5>
                                                    </a>
                                                    <div class='mb-2 d-flex align-items-baseline'>
                                                        <span class='fs-7 color-7 m-0'>{{ $Functional->benefit }}
                                                        </span>
                                                    </div>
                                                    <div class='mb-2 d-flex align-items-baseline'>
                                                        <span class='fs-7 color-7 m-0'>Số lượng còn lại:
                                                            <span
                                                                class='text-black fw-4'>{{ $Functional->quantity }}</span>
                                                        </span>
                                                    </div>
                                                    <div class='d-flex align-items-baseline'>
                                                        <div class="me-1">
                                                            <img class='img--initial' src='/img/Mask Group 224.svg'>
                                                        </div>
                                                        <span class='fs-7 color-7 m-0'>Giá:
                                                            <span class='text-black fw-4'>
                                                                @money($Functional->price) VNĐ
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center w-100 pb-3">
                                                @if ($Functional->quantity == 0)
                                                    <div class="w-50">
                                                        <button class="rounded-10 bg-danger py-2 px-3 border-danger w-100">
                                                            Hết hàng
                                                        </button>
                                                    </div>
                                                @else
                                                    <a class="w-50" href="{{ route('addcart', [$Functional->id]) }}"
                                                        type="submit">
                                                        <button
                                                            class="rounded-10 py-2 px-3 border-black w-100 button--hover">Chọn
                                                            mua
                                                        </button>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="{{ url('products/index-functional') }}"><button
                                    class="btn--color-1 rounded-pill py-2 px-3">Xem tất cả thực phẩm chức năng</button></a>
                        </div>
                    </div>
                    <div class="instrument pt-xl-5 mt-4" id='simple-list-item-4'>
                        <h2 class='under-line between-line fw-4 color-1 m-0 position-relative text-center'>Thiết bị - dụng
                            cụ y tế</h2>
                        <div class="mb-4">
                            <div class="banner-product owl-carousel pt-4 mt-3 owl-theme position-relative">
                                <div class="">
                                    <img class="w-100" src="/img/bannerinstrument.png">
                                </div>
                                <div class="">
                                    <img class="w-100" src="/img/bannerinstrument1.png">
                                </div>
                                <div class="">
                                    <img class="w-100" src="/img/bannerinstrument2.png">
                                </div>
                                <div class="">
                                    <img class="w-100" src="/img/bannerinstrument3.png">
                                </div>
                            </div>
                            <div class="products__slide owl-carousel pt-4 mt-3 owl-theme position-relative">
                                @foreach ($productInstruments as $Instrument)
                                    <div class='rounded-10 shadow-sm h-100'>
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <a class="text-decoration-none"
                                                    href="{{ url("products/{$Instrument->id}") }}">
                                                    <div
                                                        class="img-hover-zoom rounded-10 rounded-bottom-0 ratio ratio-16x9 ratio ratio-16x9 ratio ratio-16x9 ratio ratio-16x9">
                                                        <img class="w-100"
                                                            src="{{ Storage::disk('productimg')->url($Instrument->file_name) }}">
                                                    </div>
                                                </a>
                                                <div class='p-3'>
                                                    <a class="text-decoration-none"
                                                        href="{{ url("products/{$Instrument->id}") }}">
                                                        <h5 class='text-black m-0 fs-5 fw-4 mb-2 text-hover-uppercase'>
                                                            {{ $Instrument->name }}
                                                        </h5>
                                                    </a>
                                                    <div class='mb-2 d-flex align-items-baseline'>
                                                        <span class='fs-7 color-7 m-0'>{{ $Instrument->benefit }}
                                                        </span>
                                                    </div>
                                                    <div class='mb-2 d-flex align-items-baseline'>
                                                        <span class='fs-7 color-7 m-0'>Số lượng còn lại:
                                                            <span
                                                                class='text-black fw-4'>{{ $Instrument->quantity }}</span>
                                                        </span>
                                                    </div>
                                                    <div class='d-flex align-items-baseline'>
                                                        <div class="me-1">
                                                            <img class='img--initial' src='/img/Mask Group 224.svg'>
                                                        </div>
                                                        <span class='fs-7 color-7 m-0'>Giá:
                                                            <span class='text-black fw-4'>
                                                                @money($Instrument->price) VNĐ
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center w-100 pb-3">
                                                @if ($Instrument->quantity == 0)
                                                    <div class="w-50">
                                                        <button class="rounded-10 bg-danger py-2 px-3 border-danger w-100">
                                                            Hết hàng
                                                        </button>
                                                    </div>
                                                @else
                                                    <a class="w-50" href="{{ route('addcart', [$Instrument->id]) }}"
                                                        type="submit">
                                                        <button
                                                            class="rounded-10 py-2 px-3 border-black w-100 button--hover">Chọn
                                                            mua
                                                        </button>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="{{ url('products/index-instrument') }}"><button
                                    class="btn--color-1 rounded-pill py-2 px-3">Xem tất cả thiết bị - dụng cụ y
                                    tế</button></a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center d-none d-xl-flex pt-xl-5 mt-4">
                        <img class="w-100" src="img/bigbannerbody1.png">
                    </div>
                    <div class="country pt-xl-5 mt-4" id='simple-list-item-5'>
                        <div class="country__content bg-color-5 rounded-10 p-4">
                            <h2 class="color-1 text-center fw-4 between-line under-line position-relative">Sản phẩm đến từ
                                nhiều quốc gia</h2>
                            <div class="country__content__slide owl-carousel owl-theme position-relative pt-4 mt-3">
                                <div class="item">
                                    <div class="p-3 d-flex justify-content-center">
                                        <div class="img-hover-zoom rounded-circle">
                                            <img class="rounded-circle border border-dark" src="img/vietnamflag.png"
                                                style="width:100px; height:100px">
                                        </div>
                                    </div>
                                    <p class='text-center'>Việt Nam</p>
                                </div>
                                <div class="item">
                                    <div class="p-3 d-flex justify-content-center">
                                        <div class="img-hover-zoom rounded-circle">
                                            <img class="rounded-circle border border-dark" src="img/usflag.png"
                                                style="width:100px; height:100px">
                                        </div>
                                    </div>
                                    <p class='text-center'>Mỹ</p>
                                </div>
                                <div class="item">
                                    <div class="p-3 d-flex justify-content-center">
                                        <div class="img-hover-zoom rounded-circle">
                                            <img class="rounded-circle border border-dark" src="img/thailanflag.png"
                                                style="width:100px; height:100px">
                                        </div>
                                    </div>
                                    <p class='text-center'>Thái Lan</p>
                                </div>
                                <div class="item">
                                    <div class="p-3 d-flex justify-content-center">
                                        <div class="img-hover-zoom rounded-circle">
                                            <img class="rounded-circle border border-dark" src="img/Japan1flag.png"
                                                style="width:100px; height:100px">
                                        </div>
                                    </div>
                                    <p class='text-center'>Nhật Bản</p>
                                </div>
                                <div class="item">
                                    <div class="p-3 d-flex justify-content-center">
                                        <div class="img-hover-zoom rounded-circle">
                                            <img class="rounded-circle border border-dark" src="img/chinaflag.png"
                                                style="width:100px; height:100px">
                                        </div>
                                    </div>
                                    <p class='text-center'>Trung Quốc</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-event pt-xl-5 mt-4" id='simple-list-item-6'>
                        <div class="news-event__content pt-xl-2 pb-xl-4 mb-xl-2">
                            <h2 class="color-1 text-center m-0 fw-4 between-line under-line position-relative">Góc sức khỏe
                            </h2>
                            <div
                                class="news-event__content__slide owl-carousel owl-theme position-relative pt-4 mt-3 h-100">
                                @foreach ($posts as $post)
                                    <div>
                                        <div class="rounded-bottom-0 img-hover-zoom">
                                            <img src="{{ Storage::disk('postImg')->url($post->file_name) }}"
                                                style="height: 250px; width:100%">
                                        </div>
                                        <a class='text-decoration-none' href='{{ url("bai-viet/{$post->id}") }}'>
                                            <div class="rounded-10 shadow-sm">
                                                <div class="px-3">
                                                    <div
                                                        class="news-event__content__slide__time d-flex align-items-center pb-2">
                                                        <img class="news-event__content__slide__time__icon  me-2 m-0"
                                                            src="img/Path 14137.png" style='width:inherit'>
                                                        <span class="color-7 m-0">
                                                            {{ $post->created_at }}
                                                        </span>
                                                    </div>
                                                    <h6 class="text-black pb-3">{{ $post->title }}</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="pharmaceutical-company py-xl-5 my-4" id='simple-list-item-7'>
                        <div class="pharmaceutical-company__content">
                            <h2 class="color-1 text-center fw-4 between-line under-line position-relative">Các công ty dược
                                liên kết</h2>
                            <div
                                class="pharmaceutical-company__content__slide owl-carousel owl-theme position-relative pb-1 pt-4 mt-3">
                                <div class="item">
                                    <img class="rounded-10 shadow-sm" src="img/logobr/logobayer.png"
                                        style='width:150px;height:150px'>
                                </div>
                                <div class="item">
                                    <img class="rounded-10 shadow-sm" src="img/logobr/BLH_WS_Logo-final-1024x537.png"
                                        style='width:150px;height:150px'>
                                </div>
                                <div class="item">
                                    <img class="rounded-10 shadow-sm" src="img/logobr/JHM-NEW-LOGO-5.png"
                                        style='width:150px;height:150px'>
                                </div>
                                <div class="item">
                                    <img class="rounded-10 shadow-sm" src="img/logobr/logodrug.png"
                                        style='width:150px;height:150px'>
                                </div>
                                <div class="item">
                                    <img class="rounded-10 shadow-sm" src="img/logobr/Shionogi_Seiyaku_logo.png"
                                        style='width:150px;height:150px'>
                                </div>
                                <div class="item">
                                    <img class="rounded-10 shadow-sm" src="img/logobr/MSDlogo.png"
                                        style='width:150px;height:150px'>
                                </div>
                                <div class="item">
                                    <img class="rounded-10 shadow-sm" src="img/logobr/takedalogo.png"
                                        style='width:150px;height:150px'>
                                </div>
                                <div class="item">
                                    <img class="rounded-10 shadow-sm"
                                        src="img/logobr/Bristol-Myers_Squibb_logo_(2020).svg.png"
                                        style='width:150px;height:150px'>
                                </div>
                                <div class="item">
                                    <img class="rounded-10 shadow-sm"
                                        src="img/logobr/2560px-Johnson_and_Johnson_Logo.svg.png"
                                        style='width:150px;height:150px'>
                                </div>
                                <div class="item">
                                    <img class="rounded-10 shadow-sm" src="img/logobr/CSPClogo.png"
                                        style='width:150px;height:150px'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="row text-center pt-5 pb-3">
                            <div class="col-lg-6 m-auto">
                                <h2 class="text-center under-line fw-4 between-line position-relative color-1">Dịch vụ của chúng tôi</h2>
                            </div>
                        </div>
                        <div class="row mt-3 pt-4">
                            <div class="col-md-6 col-lg-3 pb-5">
                                <div class="h-100 py-5 services-icon-wap shadow">
                                    <div class="h1 text-success text-center"><i class="bi bi-truck"></i></div>
                                    <h2 class="h5 mt-4 text-center">Hỗ trợ vận chuyển</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 pb-5">
                                <div class="h-100 py-5 services-icon-wap shadow">
                                    <div class="h1 text-success text-center"><i class="bi bi-arrow-left-right"></i></div>
                                    <h2 class="h5 mt-4 text-center">Hoàn tiền và trả lại hàng</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 pb-5">
                                <div class="h-100 py-5 services-icon-wap shadow">
                                    <div class="h1 text-success text-center"><i class="bi bi-percent"></i></div>
                                    <h2 class="h5 mt-4 text-center">Khuyến mãi</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 pb-5">
                                <div class="h-100 py-5 services-icon-wap shadow">
                                    <div class="h1 text-success text-center"><i class="bi bi-person-video3"></i></div>
                                    <h2 class="h5 mt-4 text-center">Hỗ trợ 24/24h</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
