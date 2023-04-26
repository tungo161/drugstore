{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layouts.app.master')

{{-- Đặt title cho page --}}
@section('title', 'Tất cả loại thuốc')

{{-- Đặt file css cho page --}}
@section('file', 'index-medicine')

{{-- Đặt class cho body --}}
@section('page', 'index-medicine')

@section('content')
    <div class='header-menu bg-color-5'>
        <div class='container align-items-center'>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-3 m-0">
                    <li class="breadcrumb-item"><a class='text-decoration-none color-12 fs-7' href='{{ url('') }}'>Trang
                            chủ</a></li>
                    <li class="breadcrumb-item active" id="breadcrumb-item-active"><a
                            class='text-decoration-none
                text-black fs-7'
                            href='{{ url('search-page') }}'>Tìm kiếm</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <main class="main">
        <div class="py-xl-5 my-4">
            <div class="py-3 py-xl-2 container">
                <div class="mb-4">
                    <select class="form-select w-25" aria-label="Default select example" name="role" id="role_id">
                        <option value="0"  @if(session('searching')[1] == 0) selected @endif>Tất cả sản phẩm</option>
                        @foreach ($productTypes as $productType)
                        <option value="{{ $productType->id }}" @if(session('searching')[1] == $productType->id) selected @endif> {{ $productType->name }}</option>
                        @endforeach
                    </select>
                    <label class="color-13 fs-7 mb-1">Tìm kiếm</label>
                    <form class="input-group mb-3">
                        <input type="search" class="form-control border-0 rounded-start-pill" value="{{session('searching')[0]}}" name="search" placeholder="Tìm kiếm" aria-label="Search" type="text">
                        <button class="input-group-text border-0 rounded-6 ps-3 rounded-end-circle" id="basic-addon2">
                            <img class="ps-3 border-start" src="/img/Mask Group 513.svg">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
