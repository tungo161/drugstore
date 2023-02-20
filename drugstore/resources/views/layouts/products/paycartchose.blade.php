
@include('layouts.apps._header')
@php $total=0; 
    $TotalProduct=0;
@endphp

<h3 class="text-center p-1">Xác nhận thanh toán</h3>
<form class="form-edit" method="POST" action="{{ route("processTransaction") }}" enctype='multipart/form-data'>
    @csrf

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
                        @if(session('cart'))
                            @foreach (session('cart') as $id => $products)
                            @php
                                $TotalProduct+=$products['quantity'];
                                $sub_total= $products['price']* $products['quantity'];
                                $total+=$sub_total
                            @endphp
                            <tr>
                                <td>{{$products['name']}}</td>    
                                <td>{{$products['quantity']}}</td>    
                                <td>
                                    <div class="price-wrap"> <var class="price"></var> <small class="text-muted">@money( $products['price'] )  VNĐ</small> </div>
                                </td>
                                <td>@money($sub_total) VNĐ</td>
                            </tr>
                            @endforeach
                            <td></td>
                            <td>Tổng số sản phẩm: {{ $TotalProduct }}</td>
                            <td></td>
                            <td>Tổng tiền: @money($total) VNĐ</td>
                        @endif
                        
                        @php
                            $vn_to_usd= $total*0.000042;
                            $total_paypal=round($vn_to_usd,2);
                            \Session::put('total_paypal',$total_paypal);
                        @endphp
                    </tbody>
                </table>
            </aside>
            <aside class="col-lg-6 ">
                
                <div class="mb-3">
                    <label>Tên người nhận</label>
                    <input type="text" name="name" value="{{ $user->name}}" class="form-control @error('name') is-invalid  @enderror " />
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                
                </div>
                <div class="mb-3">
                    <label>Số điện thoại</label>
                    <input type="text" name="phone" value="{{ $user->phone}}" class="form-control @error('phone') is-invalid  @enderror " />
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    
                    <label>Địa chỉ</label>
                    <input type="text" name="address" value="{{ $user->address}}" class="form-control @error('address') is-invalid  @enderror " />
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="mb-3">
                        <label>Ghi chú</label>
                        <textarea class="form-control" id="task-textarea" name="note"></textarea>
                    </div>

                    <div class="mb-3">

                        <select name="ordertypes_id" id="cars">
                            <option value="1">Thanh toán bằng tài khoản</option>
                            <option value="2">Thanh toán bằng tiền mặt</option>
                        </select>

                    </div>
            </aside>
    
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <a  href="{{ url('cart') }}" class="btn btn-danger m-1">Xem lại giỏ hàng</a>
        <button class="btn btn-success m-1" onclick="location.href='{{ route('processTransaction') }}'" >Thanh toán</button>
        
        @if(\Session::has('error'))
            <div class="alert alert-danger">{{ \Session::get('error') }}</div>
            {{ \Session::forget('error') }}
        @endif
        @if(\Session::has('success'))
            <div class="alert alert-success">{{ \Session::get('success') }}</div>
            {{ \Session::forget('success') }}
        @endif
    </div>
</form>

@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#task-textarea' ) )
        .catch( error => {
            console.error( error );
        } );
        function myFunction() {
        alert("Hello! I am an alert box!");
        }
</script>

<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>

@endsection




@include('layouts.apps._footer')