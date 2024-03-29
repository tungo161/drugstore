@extends('layouts.admin._header')
@extends('layouts.admin._leftnav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    @php
        $sum=0;   
    @endphp
    <main class="mt-5 pt-3">
        <div class="container d-flex justify-content-center pt-3">
            <a class="btn btn-primary" href="{{ url('managerproduct/create')}}">Thêm mới sản phẩm</a>
        </div>
        
        <div class="container-xl d-xl-flex justify-content-center overflow-scroll p-3">
            <table class="table table-striped table-hover">
                <tr style="border:1px black solid">
                    <th>id</th>
                    <th>tên sản phẩm</th>
                    <th>Số lượng còn lại</th>
                    <th>loại sản phẩm</th>
                    <th>ảnh hiển thị</th>
                    <th>giá</th>
                    <th>Số lượng đã bán</th>
                    <th>Ngày tạo</th>
                    <th>Ngày cập nhật</th>
                    <th>Action 1</th>
                    <th>Action 2</th>
                    
                </tr>
                
                @foreach ($products as $product)
                <tr style="border:1px black solid">
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->producttypes->name}}</td>
                    <td><img class="card-img rounded-0 img-fluid" src="{{ Storage::disk('productimg')->url($product->file_name) }}" style="height: 150px; width:150px" ></td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @foreach ($product->orderproducts as $orderproduct)
                        @php
                            $sum+=$orderproduct->quantity_of_product;   
                        @endphp
                        
                        @endforeach
                        {{ $sum }}
                    </td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td><a class="btn btn-primary" href='{{ url("managerproduct/{$product->id}/edit") }}'>Update</a></td>
                    <td>
                        <a class="btn btn-danger" href="javascript:void(0)" onclick="document.getElementById('delete-'+{{ $product->id }}).submit()">Delete</a>
                        <form id="delete-{{ $product->id }}" method="POST" action="{{ url("managerproduct/{$product->id}") }}">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @php
                    $sum=0;   
                @endphp
                @endforeach
            </table>
            
        </div>
        <div class="d-flex justify-content-center">
            {!! $products->onEachSide(1)->links() !!}
        </div>
    </main>
    <script type="text/javascript" src="js.js"></script>
</body>
</html>



    
