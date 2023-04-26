{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layouts.app.master')

{{-- Đặt title cho page --}}
@section('title', 'Thông tin cá nhân')

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
                    <li class="breadcrumb-item active" id="breadcrumb-item-active"><a
                            class='text-decoration-none
                text-black fs-7' href='{{ url('cart') }}'>Thông tin
                            cá nhân</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <main class="main">
        <section class="py-xl-5 mb-4">
            <form class="container py-xl-2 py-3" action="{{ url('profileuser') }}" enctype="multipart/form-data"
                method="POST">
                @csrf
                <div class="bg-color-5 rounded-10">
                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="d-flex justify-content-center align-items-center mb-3 mt-5">
                                <img class="rounded-circle me-2" width="150px"
                                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                <div>
                                    <span class="font-weight-bold">{{ $user->name }} </span>
                                    <span class="text-black-50">{{ $user->email }}</span>
                                </div>
                            </div>
                            <ul class="list-group px-3">
                                <a class="list-group-item text-decoration-none" href="{{ url('profileuser') }}">Thông tin tài khoản</a>
                                @if (Auth::user()->role != 1)
                                    <a class="list-group-item text-decoration-none"
                                        href='{{ url("profileuser/viewAllOrder/{$user->id}") }}'>
                                        Hóa đơn
                                    </a>
                                @endif
                            </ul>
                        </div>
                        <div class="col-xl-8 col-12">
                            <h3 class="fw-4 mb-4 text-center pt-4 mb-3">Thông tin tài khoản</h3>
                            <div class="px-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Email</span>
                                    <p type="text" class="form-control m-0 bg-color-7">{{ $user->email }}</p>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Tên</span>
                                    <input type="text" name="name" value="{{ $user->name }}"
                                        placeholder="nhập tên" aria-label="Username" aria-describedby="basic-addon1" class="form-control @error('name') is-invalid @enderror " />
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Số điện thoại</span>
                                    <input type="text" name="phone" value="{{ $user->phone }}"
                                        placeholder="nhập số điện thoại" aria-label="Username"
                                        aria-describedby="basic-addon1" class="form-control @error('phone') is-invalid @enderror " />
                                        @error('phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Địa chỉ</span>
                                    <input type="text" name="address" value="{{ $user->address }}"
                                        placeholder="nhập địa chỉ" aria-label="Username" aria-describedby="basic-addon1" class="form-control @error('address') is-invalid @enderror " />
                                        @error('address')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                                @if (Auth::user()->role != 1)
                                    <p>Số tiền đã thanh toán bằng tài khoản @money($user->account) VNĐ</p>
                                @endif
                                <div class="my-4 d-flex justify-content-center">
                                    <div class="m-2 text-center"><button class="btn btn-primary profile-button"
                                            type="submit">Cập nhật tài khoản</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </section>
    </main>
@endsection
