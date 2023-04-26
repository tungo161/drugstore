
{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layouts.app.master')

{{-- Đặt title cho page --}}
@section('title', 'Chi tiết hóa đơn')

{{-- Đặt file css cho page --}}
@section('file', 'infomation-order')

{{-- Đặt class cho body --}}
@section('page', 'infomation-order')

@section('content')

    <div class='header-menu bg-color-5'>
        <div class='container align-items-center'>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-3 m-0">
                    <li class="breadcrumb-item"><a class='text-decoration-none color-12 fs-7' href='{{ url('') }}'>Trang
                            chủ</a></li>
                    <li class="breadcrumb-item"><a class='text-decoration-none color-12 fs-7'
                            href='{{ url('profileuser') }}'>Thông
                            tin
                            cá nhân</a></li>
                    <li class="breadcrumb-item"><a class='text-decoration-none color-12 fs-7'>Hóa đơn</a></li>
                    <li class="breadcrumb-item active" id="breadcrumb-item-active"><a
                            class='text-decoration-none
                text-black fs-7'>Chi tiết hóa đơn</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <main class="main">
        <section class="py-xl-5 mb-4">
            <div class="container py-xl-2 py-3">
@php $total=0; 
    $totalpro=0;
    $count=0;
@endphp

<h3 class="text-center p-1">Thông tin hóa đơn</h3>
    <div class="container p-1">
        <div class="row">
            <aside class="col-xl-6 col-12 mb-xl-0 mb-4">
                <div class="rounded-10 bg-color-5">
                    <h3 class="text-center">Hóa đơn</h3>
                    <table class="table table-borderless table-striped table-hover">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá trên một sản phẩm</th>
                                <th scope="col">Tiền sản phẩm</th>
                            </tr>
                        </thead>
                        <tbody>           
                </div>
                @foreach ($OrderWithRelationship as $Order)
                    @if (Auth::user()->id == $Order->users_id)    
                        @foreach ($Order->Products as $ProductInformation)
                            <tr>
                                <td>{{ $ProductInformation->name }}</td>
                                    <td>{{ $Order->productInOrder[$count]->quantity_of_product }}</td>
                                        @php
                                            $money=$ProductInformation->price *$Order->productInOrder[$count]->quantity_of_product;
                                            $total+=$money;
                                            $count++;
                                        @endphp
                                    <td>{{ $ProductInformation->price }}</td>
                                <td>@money($money) VNĐ</td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                <span>Tổng tiền @money($total) VNĐ</span>
                </div>
            </aside>
            <aside class="col-xl-6 col-12">
                <div class="rounded-10 bg-color-5">
                    <div class="p-3">
                        <h3 class="text-center">Thông tin người đặt</h3>
                        @if (Auth::user()->id == $Order->users_id)  
                        <div class="mb-3">
                            <label>Tài khoản đặt hàng: </label>
                            <span class="fw-4">{{ $Order->user->email }}</span>
                        </div>
                        <div class="mb-3">
                            <label>Tên người nhận: </label>
                            <span class="fw-4">{{ $Order->usernametake }}</span>
                        </div>
                        <div class="mb-3">
                            <label>Số điện thoại: </label>
                            <span class="fw-4">{{ $Order->phonefortake }}</span>
                        </div>
                        <div class="mb-3">        
                            <label>Địa chỉ: </label>
                            <span class="fw-4">{{ $Order->addressfortake }}</span>
                            <div class="mb-3">
                                <label>Ghi chú: </label>
                                <span>{!! $Order->note !!}</span>
                            </div>
                            @else
                                <p class="text-warning text-center">Bạn đang cố truy cập vào dữ liệu của tài khoản khác</p>
                                <a href="{{ url('')}}" class="btn btn-danger">Trở về</a>
                            @endif
                    </div>
                </div>
                    @endforeach  
            </aside>
        </div>
    </div>
            </div>
        </section>
    </main>
@endsection
