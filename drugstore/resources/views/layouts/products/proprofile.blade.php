@include('layouts.apps._header')
<form class="form-edit" method="POST" action="{{ url("products") }}" enctype='multipart/form-data'>
    @csrf

    

    @foreach ($ProductWithRelationship as $products )
<div class="container pb-5">
    <div class="row">
        <div class="col-lg-5 mt-5">
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        
                        <div class="card mb-3">
                            <img class="card-img img-fluid" src="{{ Storage::disk('productimg')->url($products->file_name) }}" alt="Card image cap" id="product-detail" style="height: 450px">
                        </div>
                    </div>
                    
                    @foreach ($products->imgs as $proimg )
                        
                    
                    <div class="carousel-item">
                        
                        <div class="card mb-3">
                            <img class="card-img img-fluid" src="{{ Storage::disk('productimg')->url($proimg->file_name) }}" alt="Card image cap" id="product-detail" style="height: 450px">
                        </div>
                        
                    </div>
                    @endforeach
                    
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>

                </div>
            <div class="row pb-3">
                            <div class="col d-grid">
                                @if($products->quantity==0)
                                <a  class="btn btn-danger btn-lg" style="cursor:context-menu">Hết hàng</a>
                                @else
                                @if(Auth::check())
                                    @if(Auth::user()->role==1)
                                        @else
                                            <a type="submit" href="{{ route('addcart',[$products->id])}}" class="btn btn-success btn-lg" name="submit" value="addtocard">Thêm vào giỏ hàng</a>
                                        @endif
                                    @endif
                                @endif
                            </div>
                        </div>

        </div>
        <!-- col end -->
        <div class="col-lg-7 mt-5">
            <div class="card">
                <div class="card-body">
                    @foreach ($ProductWithRelationship as $products )

                    
                    <h1 class="h2">{{ $products->name }}</h1>
                    <p class="h3 py-2">@money($products->price) VNĐ</p>
                    
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6>Nhà sản xuất:</h6>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted"><strong>{{ $products->manufacturers->name }}</strong></p>
                        </li>
                    </ul>


                    <h6>Công dụng: <span>{{ $products->benefit }}</span></h6>
                    <h6>Số lượng: <span>{{ $products->quantity }}</span></h6>
                    <h6>Công ty sản xuất: {{ $products->manufacturers->name }}</h6>
                    <div>{!! $products->description !!}</div>
                    @endforeach
                            
                        
                    

                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endforeach
@include('layouts.apps._footer')