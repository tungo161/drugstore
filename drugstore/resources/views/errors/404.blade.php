{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layouts.app.master')
@section('header')
@stop
@section('footer')
@stop
{{-- Đặt title cho page --}}
@section('title', 'Lỗi 404')

{{-- Đặt file css cho page --}}
@section('file', '404')

{{-- Đặt class cho body --}}
@section('page', '404-page')

@section('content')
    <main class="main">
        <div class='postion-relative'>
            <div class='d-none d-xl-block'>
                <img class='w-100 position-absolute' src='/img/dangnhap@2x.png'>
                <div class='position-absolute top-50 start-50 translate-middle d-flex justify-content-center'>
                    <div class='text-center text-white text-white'>
                        <div class='d-flex'>
                            <h1 class='error-text fw-1 me-4'>ERROR</h1>
                            <h1 class='error-text fw-8'> 404!</h1>
                        </div>
                        
                        <h3 class='mb-4'>Không tìm thấy trang!</h3>
                        <a class='text-decoration-none rounded-6 text-white py-2 px-5 bg-color-1 fs-6' href="{{ url('/' )}}"><img class='m-auto me-1' src='/img/Mask Group 478.png'>Quay lại trang chủ</a>
                    </div>
                </div>
            </div> 
            <div class='d-xl-none'>
                <img class='w-100 position-absolute' src='img/dangnhap@2x.png'>
                <div class='w-100 position-absolute top-0 pt-5 pt-xl-0 start-50 translate-middle d-flex justify-content-center'>
                    <div class='text-center text-white pt-5 pt-xl-0 text-white'>
                        <div class='d-flex pt-5 pt-xl-0 justify-content-center'>
                            <h1 class='fw-1 me-4'>ERROR</h1>
                            <h1 class='fw-8'> 404!</h1>
                        </div>
                        
                        <h3 class='mb-4'>Không tìm thấy trang!</h3>
                        <a class='text-decoration-none rounded-6 text-white py-2 px-5 bg-color-1 fs-6' href="{{ url('/' )}}"><img class='m-auto me-1' src='/img/Mask Group 478.png'>Quay lại trang chủ</a>
                    </div>
                </div>
            </div> 
            <img class='w-100' src='/img/dawid-zawila--G3rw6Y02D0-unsplash@2x.png'>
        </div>

    </main>
@endsection
