{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layouts.app.master')

{{-- Đặt title cho page --}}
@section('title', 'Giỏ hàng')

{{-- Đặt file css cho page --}}
@section('file', 'cart-page')

{{-- Đặt class cho body --}}
@section('page', 'cart-page')

@section('content')
    @php
        $total = 0;
        $TotalProduct = 0;
    @endphp
    <div class='header-menu bg-color-5'>
        <div class='container align-items-center'>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-3 m-0">
                    <li class="breadcrumb-item"><a class='text-decoration-none color-12 fs-7' href='{{ url('') }}'>Trang
                            chủ</a></li>
                    <li class="breadcrumb-item active" id="breadcrumb-item-active"><a
                            class='text-decoration-none
                text-black fs-7' href='{{ url('cart') }}'>Giỏ
                            hàng</a></li>
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
                            <div class="progress-bar bg-color-2" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="position-absolute top-0 start-25 translate-middle active">
                            <button class="bg-color-2 text-white border-0 fs-6 rounded-pill">Giỏ hàng</button>
                        </div>
                        <div class="position-absolute top-0 start-50 translate-middle active">
                            <button class="text-black fs-6 border-0 rounded-pill">Thanh toán</button>
                        </div>
                        <div class="position-absolute top-0 start-75 translate-middle active">
                            <button class="text-black fs-6 border-0 rounded-pill">Hoàn tất</button>
                        </div>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-xl-8 col-12 overflow-auto mb-3 mb-xl-0" style="height: 760px">
                        <div class="rounded-10 border col-12">
                            @if (session('cart'))
                                @foreach (session('cart') as $id => $products)
                                    @php
                                        $TotalProduct += $products['quantity'];
                                        $sub_total = $products['price'] * $products['quantity'];
                                        $total += $sub_total;
                                    @endphp
                                    <div class="row border-bottom m-3 py-3">
                                        <div class="col-xl-3 col-6 img-hover-zoom">
                                            <img class="w-100" height="100px"
                                                src="{{ Storage::disk('productimg')->url($products['file_name']) }}">
                                        </div>
                                        <div
                                            class="col-xl-5 col-6 d-flex flex-column align-items-center justify-content-center">
                                            <div>
                                                <p class="mb-2 color-7 fs-6">Tên sản phẩm: <span
                                                        class="text-black fw-4">{{ $products['name'] }}</span></p>
                                            </div>
                                            <div>
                                                <p class="m-0 color-7 fs-6">Số lượng: <span
                                                        class="text-black fw-4">{{ $products['price'] }} VNĐ</span></p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-12 d-flex flex-column justify-content-end">
                                            <div class="d-flex justify-content-end mb-3">
                                                <a href="{{ route('removecart', [$id]) }}"
                                                    class="btn px-3 rounded-0 text--hover-uppercase text-danger text--hover-color"
                                                    data-abc="true">
                                                    Xóa</a>
                                            </div>
                                            <div class="d-flex justify-content-xl-end justify-content-center mb-3">
                                                <form action="{{ route('changequantitycart', $id) }}" class="d-flex">
                                                    <button type="submit" value="down" name="change_to"
                                                        class="btn btn-danger px-3  rounded-0">
                                                        @if ($products['quantity'] === 1)
                                                            x
                                                        @else
                                                            -
                                                        @endif
                                                    </button>
                                                    <input class="cart_quantity_product text-center border-0 rounded-0"
                                                        type="number" value="{{ $products['quantity'] }}" min="1" id="cart_quantity_product{{$id}}"
                                                        name="cart_quantity_product">
                                                    <button type="submit" value="up" name="change_to"
                                                        class="btn btn-success px-3 rounded-0">
                                                        +
                                                    </button>
                                                    <button type="submit" name="update"
                                                        class="btn btn btn-primary px-2 rounded-0 ms-2">
                                                        Sửa
                                                    </button>
                                                </form>
                                            </div>
                                            <p class="color-7 fs-6 text-end m-0">@money($sub_total) VNĐ</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="rounded-10 border">
                            <div class="m-3">
                                <dl class="dlist-align">
                                    <dt>Tổng số sản phẩm:</dt>
                                    <dd class="text-right ml-3">{{ $TotalProduct }}</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Tổng tiền:</dt>
                                    <dd class="text-right text-dark b ml-3"><strong>@money($total) VNĐ</strong></dd>
                                    @php
                                        session()->put('moneys', $total);
                                    @endphp
                                    <input type="hidden" name="total_pay" value="$total">
                                </dl>
                                @if ($TotalProduct == 0)
                                    <hr><a class="btn btn-out btn-danger btn-square btn-main" data-abc="true"
                                        style="cursor:context-menu "> Xác nhận thanh toán</a>
                                @else
                                    <hr><a href="{{ route('viewpaychoose') }}"
                                        class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Xác nhận thanh
                                        toán</a>
                                @endif
                                <hr><a href="{{ url('products') }}" class="btn btn-out btn-success btn-square btn-main mt-2"
                                    data-abc="true">Tiếp tục mua</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
