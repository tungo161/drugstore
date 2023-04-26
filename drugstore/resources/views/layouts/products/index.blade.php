{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layouts.app.master')

{{-- Đặt title cho page --}}
@section('title', 'Tất cả sản phẩm')

{{-- Đặt file css cho page --}}
@section('file', 'index-products')

{{-- Đặt class cho body --}}
@section('page', 'index-products')

@section('content')
    <div class='header-menu bg-color-5'>
        <div class='container align-items-center'>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-3 m-0">
                    <li class="breadcrumb-item"><a class='text-decoration-none color-12 fs-7' href='{{ url('') }}'>Trang
                            chủ</a></li>
                    <li class="breadcrumb-item active" id="breadcrumb-item-active"><a
                            class='text-decoration-none
                text-black fs-7' href='{{ url('') }}'>Tất cả
                            sản phẩm</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <main class="main">
        <div class="py-xl-5 my-4">
            <div class="py-3 py-xl-2 container">
                <h2 class='under-line between-line fw-4 color-1 m-0 position-relative text-center'>Tất cả sản phẩm</h2>
                <div class="pt-3 mt-4">
                    <div class="mb-4">

                        <label class="color-13 fs-7 mb-1">Tìm kiếm</label>
                        <form class="input-group mb-3">
                            <select class="form-select bg-color-5 border-0 rounded-start-pill" aria-label="Default select example" name="role" id="role_id">
                                <option value="0"  @if(session('searching')[1] == 0) selected @endif>Tất cả sản phẩm</option>
                                @foreach ($productTypes as $productType)
                                <option value="{{ $productType->id }}" @if(session('searching')[1] == $productType->id) selected @endif> {{ $productType->name }}</option>
                                @endforeach
                            </select>
                            <input type="search" class="form-control border-0" value="{{session('searching')[0]}}" name="search" placeholder="Tìm kiếm" aria-label="Search" type="text">
                            <button class="input-group-text border-0 rounded-6 ps-3 rounded-end-circle" id="basic-addon2">
                                <img class="ps-3 border-start" src="/img/Mask Group 513.svg">
                            </button>
                        </form>
                        <div class="pt-2 mb-4">
                            @if (session('searching')[0])
                            <span class="fs-4 fw-4 fw-4">{{ $products->total() }} kết quả tìm kiếm cho: </span>
                            <span class="fs-4 fst-italic color-1 fw-4"> "{{session('searching')[0]}}"</span>
                            @endif
                        </div>
                    </div>
                    <div class="row row-cols-xl-3 row-cols-1">
                        @foreach ($products as $product)
                            <div class="col mb-xl-4">
                                <div class='rounded-10 shadow-sm h-100'>
                                    <div class="d-flex flex-column justify-content-between h-100">
                                        <div class="">
                                            <a class="text-decoration-none" href="{{ url("products/{$product->id}") }}">
                                                <div
                                                    class="img-hover-zoom rounded-10 rounded-bottom-0 ratio ratio-16x9 ratio ratio-16x9 ratio ratio-16x9 ratio ratio-16x9">
                                                    <img class="w-100"
                                                        src="{{ Storage::disk('productimg')->url($product->file_name) }}">
                                                </div>
                                            </a>
                                            <div class='p-3'>
                                                <a class="text-decoration-none" href="{{ url("products/{$product->id}") }}">
                                                    <h5 class='text-black m-0 fs-5 fw-4 mb-2 text-hover-uppercase'>
                                                        {{ $product->name }}
                                                    </h5>
                                                </a>
                                                <div class='mb-2 d-flex align-items-baseline'>
                                                    <span class='fs-7 color-7 m-0'>{{ $product->benefit }}
                                                    </span>
                                                </div>
                                                <div class='mb-2 d-flex align-items-baseline'>
                                                    <span class='fs-7 color-7 m-0'>Số lượng còn lại:
                                                        <span class='text-black fw-4'>{{ $product->quantity }}</span>
                                                    </span>
                                                </div>
                                                <div class='d-flex align-items-baseline'>
                                                    <div class="me-1">
                                                        <img class='img--initial' src='/img/Mask Group 224.svg'>
                                                    </div>
                                                    <span class='fs-7 color-7 m-0'>Giá:
                                                        <span class='text-black fw-4'>
                                                            @money($product->price) VNĐ
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center w-100 pb-3">
                                            @if ($product->quantity == 0)
                                                <div class="w-50">
                                                    <button class="rounded-10 bg-danger py-2 px-3 border-danger w-100">
                                                        Hết hàng
                                                    </button>
                                                </div>
                                            @else
                                                <a class="w-50" href="{{ route('addcart', [$product->id]) }}" type="submit">
                                                    <button class="rounded-10 py-2 px-3 border-black w-100 button--hover">Chọn
                                                        mua
                                                    </button>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center pt-3">
                {!! $products->onEachSide(1)->links() !!}
            </div>

        </div>

    </main>
@endsection
