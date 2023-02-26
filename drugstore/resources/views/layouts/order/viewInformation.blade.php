
@extends('layouts.admin._header')
@extends('layouts.admin._leftnav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
</head>
<body>
    @php $total=0; 
    $totalpro=0;
    $count=0;
@endphp
<main class="mt-5 pt-3">
    <h3 class="text-center p-1">Thông tin hóa đơn</h3>

        <div class="container-fluid p-2">
            <div class="row">
                
                
                <aside class="col-lg-6 card">
                    <h3 class="text-center">Hóa đơn</h3>

                    <table class="table table-borderless table-striped table-hover">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá trên một sản phẩm</th>
                                <th scope="col">Tiền sản phẩm</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                                
                @foreach ($OrderWithRelationship as $Order )
        
                            @foreach ($Order->Products as $ProductInformation)
                                <tr>
                                    <td>{{ $ProductInformation->name }}</td>
                                    <td>{{ $Order->productInOrder[$count]->quantity_of_product }}</td>
                                        @php
                                            $money=$ProductInformation->price *$Order->productInOrder[$count]->quantity_of_product;
                                            $total+=$money;
                                            $count++;
                                        @endphp
                                    <td>{{ $ProductInformation->price }}</td>
                                    <td> @money($money) </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        <span>Tổng tiền @money($total)</span>
                    </div>
                </aside>
                <aside class="col-lg-6 ">

                    <div class="mb-3">
                        <label>Tài khoản đặt hàng: </label>
                        <span>{{ $Order->user->email }}</span>
                    </div>
                    
                    <div class="mb-3">
                        <label>Tên người nhận: </label>
                        <span>{{ $Order->usernametake }}</span>
                    </div>
                    <div class="mb-3">
                        <label>Số điện thoại: </label>
                        <span>{{ $Order->phonefortake }}</span>

                    </div>
                    <div class="mb-3">
                        
                        <label>Địa chỉ: </label>

                        <span>{{ $Order->addressfortake }}</span>

                        <div class="mb-3">
                            <label>Ghi chú: </label>
                            <span>{!! $Order->note !!}</span>
                        </div>

                        <div class="mb-3">
                            <label>Hình thức thanh toán: </label>
                            <span>{{ $Order->orderType->typeorder }}</span>
                        </div>
                        @endforeach
                        
                </aside>
        
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a class="btn btn-danger" href="{{ url()->previous() }}">Quay lại</a>
        </div>    
    @section('scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#task-textarea' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

    @endsection

</main>
</body>
</html>
