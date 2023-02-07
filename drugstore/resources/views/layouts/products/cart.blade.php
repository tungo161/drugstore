@include('layouts.apps._header')
@php $total=0; 
    $totalpro=0;
@endphp
<div class="container-fluid p-2">
    <div class="row">
        <aside class="col-lg-9">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-hover">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col" >Sản phẩm</th>
                                <th scope="col" width="240">Số lượng</th>
                                <th scope="col" width="240">Giá trên một sản phẩm</th>
                                <th scope="col">Tiền sản phẩm</th>
                                <th scope="col" class="text-right d-none d-md-block" width="200"></th>
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
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img class="img-sm border border-success p-2 mb-2 border-opacity-25" src="{{ Storage::disk('productimg')->url($products['file_name']) }}" style="width:220px;height:150px"></div>
                                            <p class="info text-center"> <a href="#" class="title text-dark" data-abc="true" style="text-decoration: none">{{ $products['name'] }}</a>
                                                
                                            </p>
                                        </figure>
                                    </td>
                                    <td> 
                                        <form action="{{ route('changequantitycart',$id) }}" class="d-flex">
                                            <button type="submit" value="down" name="change_to" class="btn btn-danger">
                                                @if($products['quantity']===1) x @else - @endif
                                            </button>
                                            <input type="number" value="{{ $products['quantity']}}" class="text-center" disabled>
                                            <button type="submit" value="up" name="change_to" class="btn btn-success">
                                                +
                                            </button>
                                        </form>
            
                                    <td>
                                        <div class="price-wrap"> <var class="price"></var> <small class="text-muted">@money( $products['price'] )  VNĐ</small> </div>
                                    </td>
                                    <td>@money($sub_total) VNĐ</td>
                                    <td class="text-right"><a href="{{ route('removecart',[$id]) }}" class="btn btn-danger" data-abc="true"> Xóa</a> </td>
                                </tr>
                                @endforeach

                            @endif
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </aside>
        <aside class="col-lg-3">
            
            <div class="card">
                <div class="card-body">
                    <dl class="dlist-align">
                        <dt>Tổng số sản phẩm:</dt>
                        <dd class="text-right ml-3">{{ $totalpro }}</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Tổng tiền:</dt>
                        <dd class="text-right text-dark b ml-3"><strong>@money($total) VNĐ</strong></dd>
                        @php
                            session()->put('moneys', $total);
                        @endphp

                        <input type="hidden" name="total_pay" value="$total">
                    </dl>
                    <hr> <a href="{{ route('viewpaychoose') }}" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Xác nhận thanh toán</a>
                    <hr><a href="{{ url('products') }}" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Tiếp tục mua</a>
                </div>
            </div>
        </aside>
    </div>
</div>
@include('layouts.apps._footer')