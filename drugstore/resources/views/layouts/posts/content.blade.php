@extends('layouts.app.master')

{{-- Đặt title cho page --}}
@section('title', 'Chi tiết bài viết')

{{-- Đặt file css cho page --}}
@section('file', 'news-detail')

{{-- Đặt class cho body --}}
@section('page', 'news-detail')

@section('content')
    @csrf
    <section class='header-menu bg-color-5 mb-xl-5'>
        <div class='container align-items-center'>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-3">
                    <li class="breadcrumb-item fs-7"><a class='d-inline-block text-decoration-none color-12' href='{{ url('') }}'>Trang
                            chủ</a></li>
                    <li class="breadcrumb-item fs-7"><a class='d-inline-block text-decoration-none color-12' href='{{ url('bai-viet') }}'>Góc sức khỏe</a></li>
                    <li class="breadcrumb-item fs-7"><a class='text-black d-inline-block text-decoration-none color-12'
                            href='{{ url('bai-viet') }}'>{{ $posts->title }}</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <div class="container pb-5">
        <div class="row">

            <div class="card">
                <div class="card-body overflow-scroll">
                    <h2 class='fw-3 color-1'>{{ $posts->title }}</h2>
                    <div id="line-clamp" class="w-100">{!! $posts->description !!}</div>
                </div>
            </div>
        </div>
    </div>

@endsection
