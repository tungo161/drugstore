@extends('layouts.app.master')

{{-- Đặt title cho page --}}
@section('title', 'Góc sức khỏe')

{{-- Đặt file css cho page --}}
@section('file', 'news-page')

{{-- Đặt class cho body --}}
@section('page', 'news-page')

@section('content')
<main class="main mb-xl-5">
    <section class='header-menu bg-color-5 mb-xl-5'>
        <div class='container align-items-center'>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-3">
                    <li class="breadcrumb-item fs-7"><a class='text-decoration-none color-12'
                            href='{{ url('') }}'>Trang
                            chủ</a></li>
                    <li class="breadcrumb-item fs-7"><a class='text-black d-inline-block text-decoration-none color-12'
                            href='{{ url('bai-viet') }}'>Góc sức khỏe</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <div class='container py-xl-4'>
            <div class='pt-xl-2'>
                <div class='row row-cols-xl-3 row-cols-1'>
                    @foreach ($posts as $post)
                    <a class='text-decoration-none pe-0' href='{{ url("bai-viet/{$post->id}") }}'>
                        <div class='col pe-xl-4'>
                            <div class='mb-xl-4 mb-3 shadow rounded-10'>
                                <div class=''>
                                    <div class='p-4'>
                                        <img src="{{ Storage::disk('postImg')->url($post->file_name) }}"
                                        style="height: 250px; width:100%">
                                        <div class="d-flex align-items-center mb-2">
                                            <img class="me-2 m-0" src="img/Path 14137.png">
                                            <span class="color-7 m-0">
                                                {{ $post->created_at }}
                                            </span>
                                        </div>
                                        <h6 class="fw-4 text-black">{{ $post->title }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                    @endforeach
                </div>
            </div> 
        </div>
    </div>
    
</main>

<div class="d-flex justify-content-center">
    {!! $posts->onEachSide(1)->links() !!}
</div>
@endsection
