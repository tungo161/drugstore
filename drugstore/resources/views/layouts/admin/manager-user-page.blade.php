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
                    <th>id</th>
                    <th>Tên người dùng</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Số tiền đã thanh toán(VNĐ)</th>
                    <th>Điện thoại</th>
                    <th>Ngày tạo</th>
                    <th>Ngày cập nhật</th>
                    <th>Loại tài khoản</th>

                    
                </tr>
                @foreach ($users as $user)
                <tr style="border:1px black solid">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                    @if($user->role!=1)
                        <td>{{ $user->account }}</td>
                    @else
                        <td>None</td>
                    @endif
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    @if($user->role!=1)
                    <td>Khách hàng</td>
                    @else
                        <td>Admin</td>
                    @endif
                    
                </tr>
                @endforeach
            </table>
            
        </div>
        <div class="d-flex justify-content-center">
            {!! $users->onEachSide(1)->links() !!}
        </div>
    </main>
    <script type="text/javascript" src="js.js"></script>
</body>
</html>




    
