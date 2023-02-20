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
        
    <form class="container m-5 border bg-opacity-50 rounded" action="{{ url('profileuser')}}" enctype="multipart/form-data" method="POST" style="background-color: beige;">
        @csrf
        <div class="container rounded mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ $user->name }}</span><span class="text-black-50">{{ $user->email }}</span><span> </span></div>
                </div>
                <div class="col-md-9 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Thông tin tài khoản</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Email</label><p type="text" class="form-control bg-dark-subtle">{{ $user->email }}</p></div>
    
                            <div class="col-md-12"><label class="labels">Tên</label><input name="name" type="text" class="form-control" placeholder="enter address line 1" value="{{$user->name}}"></div>
    
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Số điện thoại</label><input name="phone" type="number" class="form-control" placeholder="enter phone number" value="{{ $user->phone }}"></div>
                            <div class="col-md-12"><label class="labels">Địa chỉ</label><input name="address" type="text" class="form-control" placeholder="enter address line 1" value="{{ $user->address }}"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><p >Số tiền đã thanh toán bằng tài khoản @money($user->account) VNĐ</p></div>
                        </div>
                        <div class="mt-5 text-center"><a class="btn btn-primary profile-button" href='{{ url("profileuser/viewAllOrder/{$user->id}") }}'>Xem hóa đơn</a></div>

                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Cập nhật tài khoản</button></div>
                    </div>
                </div>
                
            </div>
        </div>

    </form>
    

    
</body>
</html>

@include('layouts.apps._footer')