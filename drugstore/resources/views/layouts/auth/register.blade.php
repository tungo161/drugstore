@extends('layouts.app.master')

{{-- Đặt title cho page --}}
@section('title', 'Đăng nhập')

{{-- Đặt file css cho page --}}
@section('file', 'login-page')

{{-- Đặt class cho body --}}
@section('page', 'login-page')

@section('content')
    @csrf
    <section class='header-menu bg-color-5 mb-xl-5'>
        <div class='container align-items-center'>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-3">
                    <li class="breadcrumb-item fs-7"><a class='d-inline-block text-decoration-none color-12'
                            href='{{ url('') }}'>Trang
                            chủ</a></li>
                    <li class="breadcrumb-item fs-7"><a class='text-black d-inline-block text-decoration-none color-12'
                            href='{{ url('register') }}'>Đăng kí</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <div class="container pb-5">
        <div class="row">
            <form method="POST" action="{{ url('register') }}">
                @csrf
                <!-- Email input -->
                <div class="d-flex justify-content-center p-xl-5 py-5">
                    <div class='container'>
                        <div class="w-100 p-3 border border-primary rounded">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">Email</label>
                                <input type="email" name="email" id="form2Example1"
                                    class="form-control @error('email') is-invalid @enderror " />
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example3">Tên người dùng</label>
                                <input type="text" name="name" id="form2Example3"
                                    class="form-control @error('name') is-invalid  @enderror " />
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2">Mật khẩu</label>
                                <input type="password" name="password" id="form2Example2"
                                    class="form-control @error('password') is-invalid  @enderror " />
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2">Xác nhận mật khẩu</label>
                                <input type="password" name="password_confirmation" id="form2Example2" class="form-control">
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example4">Số điện thoại</label>
                                <input type="number" name="phone" id="form2Example4"
                                    class="form-control @error('phone') is-invalid  @enderror " />
                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example5">Địa chỉ</label>
                                <input type="text" name="address" id="form2Example5"
                                    class="form-control @error('address') is-invalid  @enderror " />
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type='submit' class="btn btn-primary btn-block mb-4 w-75">Đăng kí</button>
                            </div>

                            <div class="text-center">
                                <p>Đã có tài khoản? <a href="{{ url('login ') }}" style="display:inline-block">Đăng nhập</a>
                                </p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="bi bi-facebook"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="bi bi-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="bi bi-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="bi bi-github"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection



