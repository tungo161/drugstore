{{--Sử dụng layout nào để thực hiện vieew--}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<body>
    @include('layouts.apps._header')
    <div class="container w-75 p-3">
        <div class="row">
           

                        <form action="" class="d-flex justify-content-between bg-primary-subtle mb-1">
                            <div class="input-group w-50 m-2">
                                <input type="search" class="form-control  w-25" value="{{session('searching')[0]}}" name="search" placeholder="Tìm kiếm" aria-label="Search" aria-describedby="search-addon" />
                                <select class="form-select w-25" aria-label="Default select example" name="role" id="role_id">
                                    <option value="0"  @if(session('searching')[1] == 0) selected @endif>Tất cả sản phẩm</option>
                                    @foreach ($productTypes as $productType)
                                    <option value="{{ $productType->id }}" @if(session('searching')[1] == $productType->id) selected @endif> {{ $productType->name }}</option>
                                    @endforeach
                                </select>
                            
                            </div>

                            <div class="input-group w-25">
                                <button type="submit" class="btn btn-outline-primary m-2">search</button>
                            </div>
                        </form>
                        
                    @foreach ($products as $product)
                        <div class="col-md-4">
                            <div class="minipro card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="{{ Storage::disk('productimg')->url($product->file_name) }}" style="height: 250px" >
                                    
                                </div>
                                <div class="card-body">

                                    
                                    <a href="{{ url("products/{$product->id}") }}" class="h3 text-decoration-none">{{ $product->name }}</a>
                                    
                                    <p class="text-center mb-0"><div style="white-space: nowrap; 
                                        width: 100%; 
                                        overflow: scroll;
                                        ">Công dụng: {{ $product->benefit }}</div> </p>
                                    <p class="text-center mb-0">Giá: @money($product->price) VNĐ</p>
                                    <div class="">
                                
                                                    
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                           
                                                
                                                        @if($product->quantity==0)
                                                            <div class="text-center"><span class="btn btn-danger" style="cursor:context-menu">Hết hàng </span></div>
                                                        @else
                                                            <div class="text-center"><a  href="{{ route('addcart',[$product->id])}}" class="btn btn-outline-dark mt-auto"  type="submit">Thêm giỏ hàng <i class="bi bi-cart-plus-fill"></i></a></div>
                                                        @endif
                                                
                                            <div class="text-center">Số lượng còn lại: {{ $product->quantity}} </div>
                                        </div>

                                        
                                        <div class="card-footer p-1 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href='{{ url("products/{$product->id}") }}'>Thông tin</a></div>
                                        </div>
                                    </div>
                                
                                    
                                </div>
                            </div>
                        </div>
                        
                      
                        @endforeach
                        <hr>
                              
                
                </div>
                
                        
            
                </div>
                
            </div>
            
        
            
        </div>

    </div>
    
    <div class="d-flex justify-content-center">
        {!! $products->onEachSide(1)->links() !!}
    </div>
    <div class="container d-flex justify-content-center">
       {{--  {!! $countrys->links() !!} --}}
    </div>
    @include('layouts.apps._footer')
    <script type="text/javascript" src="js.js"></script>
</body>
</html>
