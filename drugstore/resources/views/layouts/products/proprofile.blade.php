@extends('layouts.app.master')

{{-- Đặt title cho page --}}
@section('title', 'Chi tiết sản phẩm')

{{-- Đặt file css cho page --}}
@section('file', 'product-detail')

{{-- Đặt class cho body --}}
@section('page', 'product-detail')

@section('content')
    <form class="" method="POST" action="{{ url('products') }}" enctype='multipart/form-data'>
        @csrf
        @foreach ($ProductWithRelationship as $products)
            <section class='header-menu bg-color-5 mb-xl-5'>
                <div class='container align-items-center'>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb py-3">
                            <li class="breadcrumb-item fs-7"><a class='text-decoration-none d-inline-block color-12'
                                    href='{{ url('') }}'>Trang
                                    chủ</a></li>
                            <li class="breadcrumb-item fs-7"><a class='text-decoration-none d-inline-block color-12'
                                    href='{{ url('products') }}'>Sản phẩm</a></li>
                            <li class="breadcrumb-item fs-7" id='breadcrumb-item'><a
                                    class=' d-inline-block text-decoration-none
                            text-black'
                                    href='{{ url('') }}'>{{ $products->name }}</a></li>
                        </ol>
                    </nav>
                </div>
            </section>
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                            data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card mb-3">
                                        <img class="card-img img-fluid"
                                            src="{{ Storage::disk('productimg')->url($products->file_name) }}"
                                            alt="Card image cap" id="product-detail" style="height: 450px">
                                    </div>
                                </div>
                                @foreach ($products->imgs as $proimg)
                                    <div class="carousel-item">
                                        <div class="card mb-3">
                                            <img class="card-img img-fluid"
                                                src="{{ Storage::disk('productimg')->url($proimg->file_name) }}"
                                                alt="Card image cap" id="product-detail" style="height: 450px">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="row pb-3">
                            <div class="col d-grid">
                                @if ($products->quantity == 0)
                                    <a class="btn btn-danger btn-lg" style="cursor:context-menu">Hết hàng</a>
                                @else
                                    <a type="submit" href="{{ route('addcart', [$products->id]) }}"
                                        class="btn btn-success btn-lg" name="submit" value="addtocard">Thêm vào giỏ
                                        hàng</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-lg-7 mt-5">
                        <div class="card">
                            <div class="card-body" id="ProductDetailContent">
                                @foreach ($ProductWithRelationship as $products)
                                    <h1 class="h2">{{ $products->name }}</h1>
                                    <p class="h3 py-2">@money($products->price) VNĐ</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h6 class="fw-4">Nhà sản xuất:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted"><strong>{{ $products->manufacturers->name }}</strong>
                                            </p>
                                        </li>
                                    </ul>
                                    <h6>Công dụng: <span>{{ $products->benefit }}</span></h6>
                                    <h6>Số lượng: <span>{{ $products->quantity }}</span></h6>
                                    <div class="ProductDetailContent overflow-hidden" id="line-clamp" style="height: 400px">
                                        {!! $products->description !!}</div>
                                    <button type="button" class="btn--color-1 rounded-pill px-3 py-2 text-white"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Xem thêm
                                    </button>

                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Mô tả sản phẩm</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! $products->description !!}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    @endforeach
@endsection
