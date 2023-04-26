{{--
@include('layouts.apps._header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
   
    
    <div class="container d-flex justify-content-center p-3">
        <table class="table table-striped">
            <tr style="border:1px black solid">
                <th>Tên người nhận hàng</th>
                <th>Địa chỉ nhận hàng</th>
                <th>Số điện thoại nhận hàng</th>
                <th>Tổng tiền hàng</th>
                <th>Ghi chú</th>
                <th>Ngày tạo</th>
                <th>Xem thêm</th>
                    @foreach ($users as $user)
                        </tr>
                        @foreach ($user->order as $orders)
                            @if (Auth::user()->id == $orders->users_id)
                                <tr>
                                    <th>{{ $orders->usernametake }}</th>
                                    <th>{{ $orders->addressfortake }}</th>
                                    <th>{{ $orders->phonefortake }}</th>
                                    <th>{{ $orders->price }}</th>
                                    <th>{!! $orders->note !!}</th>
                                    <th>{{ $orders->created_at }}</th>
                                    <th><a class="btn btn-success" href='{{ url("profileuser/viewAllOrder/{$user->id}/viewInformation/{$orders->id}") }}'>View</a></th>
                                </tr>
                            @else
                                <tr>
                                    <th><p class="text-warning text-center">Bạn đang cố truy cập vào dữ liệu của tài khoản khác</p></th>
                                    <th><a href="{{ url('')}}" class="btn btn-danger">Trở về</a></th>
                                </tr>
                                @break
                        @endif
                    @endforeach
                @endforeach 
        </table>
        
    </div>
    <div class="d-flex justify-content-center m-2"><a class="btn btn-danger" href="{{ URL::previous() }}">Go Back</a></div>

    <div class="d-flex justify-content-center">
        {!! $users->onEachSide(1)->links() !!}
    </div>
    
    <script type="text/javascript" src="js.js"></script>
</body>
</html>

@include('layouts.apps._footer')


    
 --}}
{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layouts.app.master')

{{-- Đặt title cho page --}}
@section('title', 'Thống kê hóa đơn')

{{-- Đặt file css cho page --}}
@section('file', 'profile-page')

{{-- Đặt class cho body --}}
@section('page', 'profile-page')

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
                    <li class="breadcrumb-item active" id="breadcrumb-item-active"><a
                            class='text-decoration-none
                text-black fs-7' href='{{ url('cart') }}'>Hóa
                            đơn</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <main class="main">
        <section class="py-xl-5 mb-4">
            <div class="container py-xl-2 py-3">
                <div class="bg-color-5 rounded-10">
                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="d-flex justify-content-center align-items-center mb-3 mt-5">
                                <img class="rounded-circle me-2" width="150px"
                                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                <div>
                                    <span class="font-weight-bold">{{ $auth->name }} </span>
                                    <span class="text-black-50">{{ $auth->email }}</span>
                                </div>
                            </div>
                            <ul class="list-group px-3">
                                <a class="list-group-item text-decoration-none" href="{{ url('profileuser') }}">Thông tin
                                    tài khoản</a>
                                @if (Auth::user()->role != 1)
                                    <a class="list-group-item text-decoration-none"
                                        href='{{ url("profileuser/viewAllOrder/{$auth->id}") }}'>
                                        Hóa đơn
                                    </a>
                                @endif
                            </ul>
                        </div>
                        <div class="col-xl-8 col-12">
                            <h3 class="fw-4 mb-4 text-center pt-4 mb-3">Hóa đơn</h3>
                            <div class="overflow-x-auto w-100">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Tên người nhận hàng</th>
                                            <th>Địa chỉ nhận hàng</th>
                                            <th>Số điện thoại nhận hàng</th>
                                            <th>Tổng tiền hàng (VNĐ)</th>
                                            <th>Ghi chú</th>
                                            <th>Ngày tạo</th>
                                            <th>Xem thêm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($orderCount as $orders)
                                            @if (Auth::user()->id == $orders->users_id)
                                                <tr>
                                                    <th>{{ $orders->usernametake }}</th>
                                                    <th>{{ $orders->addressfortake }}</th>
                                                    <th>{{ $orders->phonefortake }}</th>
                                                    <th>@money($orders->price) </th>
                                                    <th>{!! $orders->note !!}</th>
                                                    <th>{{ $orders->created_at }}</th>
                                                    <th><a class="btn btn-success"
                                                            href='{{ url("profileuser/viewAllOrder/{$users->id}/viewInformation/{$orders->id}") }}'>View</a>
                                                    </th>
                                                </tr>
                                            @else
                                                <tr>
                                                    <th>
                                                        <p class="text-warning text-center">Bạn đang cố truy cập vào dữ liệu
                                                            của tài khoản khác</p>
                                                    </th>
                                                    <th><a href="{{ url('') }}" class="btn btn-danger">Trở về</a>
                                                    </th>
                                                </tr>
                                            @break
                                        @endif

                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    {!! $orderCount->onEachSide(1)->links() !!}
                </div>
            </div>
    </section>
</main>
@endsection
