{{--Sử dụng layout nào để thực hiện vieew--}}
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
    <main class="mt-5 pt-3">
        <div class="container-xl d-xl-flex justify-content-center overflow-scroll p-3">
            <table class="table table-striped">
                <tr style="border:1px black solid">
                    <th>Tên người nhận hàng</th>
                    <th>Địa chỉ nhận hàng</th>
                    <th>Số điện thoại nhận hàng</th>
                    <th>Tổng tiền hàng (VNĐ)</th>
                    <th>Hình thức thanh toán</th>
                    <th>Ngày tạo</th>
                    <th>Xem thêm</th>                    
                </tr>
                @foreach ($orders as $order)
                <tr style="border:1px black solid">
                    <td>{{ $order->usernametake }}</td>
                    <td>{{ $order->addressfortake }}</td>
                    <td>{{ $order->phonefortake }}</td>
                    <td> @money($order->price) </td>
                    <td>@if (($order->ordertypes_id)==1)
                        Tài khoản
                        @else
                        Tiền mặt
                    @endif
                    </td>
                    <td>{{ $order->created_at }}</td>
                    <th><a class="btn btn-success" href='{{ url("managerorder/viewInformationOrder/{$order->id}") }}'>View</a></th>
                    
                </tr>
                
                @endforeach
            </table>
            
        </div>
        <div class="d-flex justify-content-center">
            {!! $orders->onEachSide(1)->links() !!}
        </div>
    </main>
    <script type="text/javascript" src="js.js"></script>
</body>
</html>




    
