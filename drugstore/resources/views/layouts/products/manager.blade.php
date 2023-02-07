{{--Sử dụng layout nào để thực hiện vieew--}}
@include('layouts.apps._header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <div class="container d-flex justify-content-center pt-3">
        <a class="btn btn-primary" href="{{ url('managerproduct/create')}}">Thêm mới sản phẩm</a>
    </div>
    <div class="container d-flex justify-content-center p-3">
        <table class="table table-striped table-hover">
            <tr style="border:1px black solid">
                <th>id</th>
                <th>tên sản phẩm</th>
                <th>ảnh hiển thị</th>
                <th>giá</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>Action 1</th>
                <th>Action2</th>
                
            </tr>
            @foreach ($products as $product)
            <tr style="border:1px black solid">
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td><img class="card-img rounded-0 img-fluid" src="{{ Storage::disk('productimg')->url($product->file_name) }}" style="height: 150px; width:150px" ></td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->updated_at }}</td>
                <td><a class="btn btn-primary" href='{{ url("managerproduct/{$product->id}/edit") }}'>Update</a></td>
                <td>
                    <a class="btn btn-danger" href="javascript:void(0)" onclick="document.getElementById('delete-'+{{ $product->id }}).submit()">Delete</a>
                    <form id="delete-{{ $product->id }}" method="POST" action="{{ url("mana-product/{$product->id}") }}">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        
    </div>
    <div class="d-flex justify-content-center">
        {!! $products->onEachSide(1)->links() !!}
    </div>
    
    <script type="text/javascript" src="js.js"></script>
</body>
</html>

@include('layouts.apps._footer')


    
