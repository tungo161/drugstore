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
   
    
    <div class="container d-flex justify-content-center p-3">
        <table class="table table-striped">
            <tr style="border:1px black solid">
                <th>Tên người nhận hàng</th>
                <th>Địa chỉ nhận hàng</th>
                <th>Số điện thoại nhận hàng</th>
                <th>Tổng tiền hàng</th>
                <th>Ghi chú</th>
                <th>Ngày tạo</th>
                <th>Xem thêm</th>
                    @foreach ($users as $user )
                        </tr>
                        @foreach ($user->order as $orders)
                            @if(Auth::user()->id ==$orders->users_id)
                                <tr>
                                    <th>{{ $orders->usernametake }}</th>
                                    <th>{{ $orders->addressfortake }}</th>
                                    <th>{{ $orders->phonefortake }}</th>
                                    <th>{{ $orders->price }}</th>
                                    <th>{!! $orders->note !!}</th>
                                    <th>{{ $orders->created_at }}</th>
                                    <th><a class="btn btn-success" href='{{ url("profileuser/viewAllOrder/{$user->id}/viewInformation/{$orders->id}") }}'>View</a></th>
                                </tr>
                            @else
                                <tr>
                                    <th><p class="text-warning text-center">Bạn đang cố truy cập vào dữ liệu của tài khoản khác</p></th>
                                    <th><a href="{{ url('')}}" class="btn btn-danger">Trở về</a></th>
                                </tr>
                                @break
                        @endif
                    @endforeach
                @endforeach 
        </table>
        
    </div>
    <div class="d-flex justify-content-center m-2"><a class="btn btn-danger" href="{{ URL::previous() }}">Go Back</a></div>

    <div class="d-flex justify-content-center">
        {!! $users->onEachSide(1)->links() !!}
    </div>
    
    <script type="text/javascript" src="js.js"></script>
</body>
</html>

@include('layouts.apps._footer')


    
