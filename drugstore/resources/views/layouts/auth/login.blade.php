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
                    <li class="breadcrumb-item fs-7"><a class='d-inline-block text-decoration-none color-12' href='{{ url('') }}'>Trang
                            chủ</a></li>
                    <li class="breadcrumb-item fs-7"><a class='text-black d-inline-block text-decoration-none color-12'
                            href='{{ url('login') }}'>Đăng nhập</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <div class="container pb-5">
        <div class="row">
            <form  method="POST" action="{{ url('login')}}">
                @csrf
                <div class="d-flex justify-content-center p-xl-5 py-5">
                    <div class='container'>
                        <div class="w-100 p-3 border border-primary rounded-10">
                            <h1 class="text-center">Login</h1>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">Email</label>
                                <input type="email" name="email" id="form2Example1" class="form-control" />
                            </div>
                            
                                <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2">Mật khẩu</label>
                                <input type="password" name="password" id="form2Example2" class="form-control" />
                            </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-block mb-4 w-75">Đăng nhập</button>
                                    
                                </div>
                                @if (\Session::has('registersuccess'))
                                <p class="text-center text-success">{{ \Session::get('registersuccess') }}</p>
                                {{ \Session::forget('registersuccess') }}
                                @endif
                                @if (\Session::has('alert'))
                                <p class="text-center text-danger">{{ \Session::get('alert') }}</p>
                                {{ \Session::forget('alert') }}
                                @endif
                                @if($jsAlert)
                                <p class="alert alert-warning">{{ $jsAlert }}</p>
                                @endif
                                
                                <div class="text-center">
                                    <p>Chưa có tài khoản? <a href="{{ url('register')}}" style="display:inline-block">Đăng kí</a></p>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="bi bi-facebook"></i>
                                    </button>
                                
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="bi bi-google"></i>
                                    </button>
                                
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="bi bi-twitter"></i>
                                    </button>
                                
                                    <button type="submit" class="btn btn-link btn-floating mx-1">
                                        <i class="bi bi-github"></i>
                                    </button>
                                    </div>  
                        </div>
                    </div>
                </div>
                    
                </form>
            
                @if(session()->has('alert'))
                <script>
                    alert({{ session()->get('alert') }});
                </script>
                @endif 
        </div>
    </div>

@endsection

    
