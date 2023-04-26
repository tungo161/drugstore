{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layouts.app.master')

{{-- Đặt title cho page --}}
@section('title', 'Xác nhận thanh toán')

{{-- Đặt file css cho page --}}
@section('file', 'confirm-cart')

{{-- Đặt class cho body --}}
@section('page', 'confirm-cart')

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
                    <li class="breadcrumb-item"><a class='text-decoration-none color-12 fs-7' href='{{ url('cart') }}'>Giỏ
                            hàng</a></li>
                    <li class="breadcrumb-item active" id="breadcrumb-item-active"><a
                            class='text-decoration-none
                text-black fs-7' href='{{ url('cart') }}'>Xác nhận
                            thanh toán</a></li>
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
                            <button class="text-black fs-6 border-0 rounded-pill">Hoàn tất</button>
                        </div>
                    </div>
                </div>
                <div class="confirm-cart__content pt-4">
                    <form method="POST" action="{{ route('processTransaction') }}" enctype='multipart/form-data'>
                        @csrf
                        <div class="row">
                            <aside class="col-lg-6 col-12 mb-0 mb-4">
                                <div class="rounded-10 border">
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
                                            @if (session('cart'))
                                                @foreach (session('cart') as $id => $products)
                                                    @php
                                                        $TotalProduct += $products['quantity'];
                                                        $sub_total = $products['price'] * $products['quantity'];
                                                        $total += $sub_total;
                                                    @endphp
                                                    <tr>
                                                        <td>{{ $products['name'] }}</td>
                                                        <td>{{ $products['quantity'] }}</td>
                                                        <td>
                                                            <div class="price-wrap"> <var class="price"></var> <small
                                                                    class="text-muted">@money($products['price']) VNĐ</small> </div>
                                                        </td>
                                                        <td>@money($sub_total) VNĐ</td>
                                                    </tr>
                                                @endforeach
                                                <td></td>
                                                <td>Tổng số sản phẩm: {{ $TotalProduct }}</td>
                                                <td></td>
                                                <td>Tổng tiền: @money($total) VNĐ</td>
                                            @endif
                                            @php
                                                $vn_to_usd = $total * 0.000042;
                                                $total_paypal = round($vn_to_usd, 2);
                                                \Session::put('total_paypal', $total_paypal);
                                            @endphp
                                        </tbody>
                                    </table>
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-12">
                                <div class="rounded-10 border">
                                    <h3 class="text-center">Xác nhận giao hàng</h3>
                                    <div class="px-3">
                                        <div class="mb-3">
                                            <label class="mb-2">Tên người nhận</label> 
                                            <input type="text" name="name" value="{{ $user->name }}"
                                                class="form-control @error('name') is-invalid  @enderror " />
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Số điện thoại</label>
                                            <input type="text" name="phone" value="{{ $user->phone }}"
                                                class="form-control @error('phone') is-invalid  @enderror " />
                                            @error('phone')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Địa chỉ</label>
                                            <input type="text" name="address" value="{{ $user->address }}"
                                                class="form-control @error('address') is-invalid  @enderror " />
                                            @error('address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="mb-3">
                                                <label class="mb-2">Ghi chú</label>
                                                <textarea class="form-control" id="task-textarea" name="note"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-2">Hình thức thanh toán</label>
                                                <select name="ordertypes_id" id="cars">
                                                    <option value="1">Thanh toán bằng tài khoản</option>
                                                    <option value="2">Thanh toán bằng tiền mặt</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                            </aside>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="{{ url('cart') }}" class="btn btn-danger m-1">Xem lại giỏ hàng</a>
                            @if($TotalProduct != 0)
                            <button class="btn btn-success m-1"
                                onclick="location.href='{{ route('processTransaction') }}'">Thanh toán</button>
                            @endif
                            @if (\Session::has('error'))
                                <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                                {{ \Session::forget('error') }}
                            @endif
                            @if (\Session::has('success'))
                                <div class="alert alert-success">{{ \Session::get('success') }}</div>
                                {{ \Session::forget('success') }}
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
