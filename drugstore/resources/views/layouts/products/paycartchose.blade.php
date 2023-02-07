
@include('layouts.apps._header')
@php $total=0; 
    $totalpro=0;
@endphp

<h3 class="text-center p-1">Xác nhận thanh toán</h3>
<form class="form-edit" method="POST" action="{{ route("addpaychoose") }}" enctype='multipart/form-data'>
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
                                $totalpro+=$products['quantity'];
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
                            <td>Tổng số sản phẩm: {{ $totalpro }}</td>
                            <td></td>
                            <td>Tổng tiền: @money($total) VNĐ</td>
                        @endif
                        
                        
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
                        @if( $total < $user->account )
                        <select name="ordertypes_id" id="cars">
                        <option value="1">Thanh toán bằng tài khoản</option>
                        <option value="2">Thanh toán bằng tiền mặt</option>
                        </select>

                        @else
                        <select name="ordertypes_id" id="cars">
                            <option value="2">Thanh toán bằng tiền mặt</option>
                            </select>
                        <p class="text-danger">Tài khoản bạn không đủ để thanh toán bằng tài khoản</p>
                        @endif
                    </div>
            </aside>
    
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <a  href="{{ url('cart') }}" class="btn btn-danger m-1">Xem lại giỏ hàng</a>
        <button type="submit" class="btn btn-success m-1">Thanh toán</button>

    </div>
</form>

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