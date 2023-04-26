{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layouts.app.master')

{{-- Đặt title cho page --}}
@section('title', 'Hoàn tất thanh toán')

{{-- Đặt file css cho page --}}
@section('file', 'complete-pay')

{{-- Đặt class cho body --}}
@section('page', 'complete-pay')

@section('content')
    <div class='header-menu bg-color-5'>
        <div class='container align-items-center'>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-3 m-0">
                    <li class="breadcrumb-item"><a class='text-decoration-none color-12 fs-7' href='{{ url('') }}'>Trang
                            chủ</a></li>
                    <li class="breadcrumb-item"><a class='text-decoration-none color-12 fs-7' href='{{ url('cart') }}'>Giỏ
                            hàng</a></li>
                    <li class="breadcrumb-item active" id="breadcrumb-item-active"><a
                            class='text-decoration-none
                text-black fs-7'>Hoàn tất thanh toán</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <main class="main">
        <section class="py-xl-5 mb-4">
            <div class="container py-xl-2 py-3">
                <div class="step-page">
                    <div class="position-relative">
                        <div class="progress">
                            <div class="progress-bar bg-color-2" role="progressbar" style="width: 100%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="position-absolute top-0 start-25 translate-middle active">
                            <button class="bg-color-2 text-white border-0 fs-6 rounded-pill">Giỏ hàng</button>
                        </div>
                        <div class="position-absolute top-0 start-50 translate-middle active">
                            <button class="bg-color-2 text-white border-0 fs-6 rounded-pill">Thanh toán</button>
                        </div>
                        <div class="position-absolute top-0 start-75 translate-middle active">
                            <button class="bg-color-2 text-white border-0 fs-6 rounded-pill">Hoàn tất</button>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <div class="bg-color-5 py-xl-5 py-4">
                        <div class="container">
                            @if (\Session::has('error'))
                            <div class="text-center">
                                <h5 class="text-danger fw-4">{{ \Session::get('error') }}</h5>
                                <p class="fs-7 color-7">Xin lỗi quý khách về vấn đề đã xảy ra.</p>
                                <p class="fs-7 color-7">Quý khách vui lòng kiểm tra lại thông tin thanh toán</p>
                                <p class="fs-7 color-7">Nếu Quý khách có thắc mắc, Xin vui lòng liên hệ với chúng tôi qua số
                                    Hotline:
                                    <span class="fw-4 color-2">0999.999.999</span>
                                </p>
                            </div>
                            {{ \Session::forget('error') }}
                        @endif
                        @if (\Session::has('success'))
                            <div class="text-center text-center">
                                <h5 class="text-success fw-4">{{ \Session::get('success') }}</h5>
                                <p class="fs-7 color-7">Cảm ơn Quý khách đã đặt hàng tại ABC store. Đơn hàng của Quý khách
                                    đang được chuẩn bị và
                                    gửi
                                    đi.</p>
                                <p class="fs-7 color-7">Nhân viên ABC store sẽ sớm liên hệ với Quý khách để xác nhận đơn
                                    hàng trong thời gian sớm
                                    nhất.</p>
                                <p class="fs-7 color-7">Nếu Quý khách có thắc mắc, Xin vui lòng liên hệ với chúng tôi qua số
                                    Hotline:
                                    <span class="fw-4 color-2">0999.999.999</span>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-12">
                                    <div class="d-flex justify-content-center mb-xl-0 mb-3">
                                        <a class="text-decoration-none" href='{{ url("profileuser/viewAllOrder/{$user->id}") }}'>
                                            <button class="btn--color-2 py-2 px-3 rounded-pill">
                                                <div class="d-flex align-items-center"><img class="me-1" 
                                                        src="/img/Mask Group 477 completepay.svg"><span>Xem lịch sử mua hàng</span></div>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ url('') }}">
                                            <button class="btn--color-2 py-2 px-3 rounded-pill">
                                                <div class="d-flex align-items-center"><img class="me-1" 
                                                        src="/img/Mask Group 478 completepay.svg"><span>Quay lại trang chủ</span></div>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {{ \Session::forget('success') }}
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
