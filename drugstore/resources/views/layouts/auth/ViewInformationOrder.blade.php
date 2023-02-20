
@include('layouts.apps._header')
@php $total=0; 
    $totalpro=0;
    $count=0;
@endphp

<h3 class="text-center p-1">Thông tin hóa đơn</h3>

    <div class="container p-1">
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
                    @if(Auth::user()->id ==$Order->users_id)    
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
                                <td>@money($money) VNĐ</td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                <span>Tổng tiền @money($total) VNĐ</span>
                </div>
            
            </aside>
            <aside class="col-lg-6 card ">
                <div class="m-4"></div>
                @if(Auth::user()->id ==$Order->users_id)  
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
                    @else
                        <p class="text-warning text-center">Bạn đang cố truy cập vào dữ liệu của tài khoản khác</p>
                        <a href="{{ url('')}}" class="btn btn-danger">Trở về</a>
                    @endif
                    @endforeach
                    
            </aside>
    
        </div>
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

@include('layouts.apps._footer')