@extends('layouts.apps._style')
@extends('layouts.admin._header')
@extends('layouts.admin._leftnav')
@php
    $CountImg=0;
@endphp
<main class="mt-5 pt-3">
    <form class="form-edit" method="POST" action="{{ url("managerproduct/{$products->id}") }}" enctype='multipart/form-data'>
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6 border d-flex align-items-center justify-content-center">
                <div class="d-flex justify-content-center p-3">
                    <div class="pro-col-content">
                        <div class="input-group mb-3">
                            <label class="input-group-text">Tên sản phẩm</label>
                            <input type='text' class="form-control" name='name' value="{{ $products->name}}">
                        </div>
                    
                
                    
                        <div class="input-group mb-3">
                            <label class="input-group-text">giá</label>
                            <input type='text' class="form-control" name='price' value="{{ $products->price}}">
                            <span class="input-group-text">VNĐ</span>
                        </div>
                    
                        <div class="input-group mb-3">
                            <label class="input-group-text">Mô tả</label>
                            <textarea class="form-control" id="task-textarea" name="description">{{ $products->description}}</textarea>
                            
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text">Công dụng</label>
                            <input type='text' class="form-control" name='benefit' value="{{ $products->benefit}}">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Số lượng</label>
                            <input type='text' class="form-control" name='quantity' value="{{ $products->quantity}}">
                        </div>

                        
                
                        <label class="input-group-text" for="manufaturer">Công ty sản xuất:</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="manufacturers_id" id="manufaturer">
                                @foreach ($manufaturers as $manufaturer)
                                <option value="{{ $manufaturer->id }}" @if($products->manufacturers_id == $manufaturer->id) selected @endif> {{ $manufaturer->name }}</option>
                                @endforeach
                            </select>
                        <label class="input-group-text" for="role_id">Loại sản phẩm:</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="role" id="role_id">
                                @foreach ($ProductTypes as $ProductType)
                                <option value="{{ $ProductType->id }}" @if($products->role == $ProductType->id) selected @endif> {{ $ProductType->name }}</option>
                                @endforeach
                            </select>

                            <div class="input-group mb-3">
                                <label class="input-group-text">Chọn ảnh hiển thị</label>
                                <input type='file' class="form-control" name='showimg'>
                            </div>

                            

                            <div class="mb-3 border border-secondary">
                                <p class="input-group-text">Ảnh hiển thị</p>
                                <div class="d-flex justify-content-center">
                                    <img src="{{ Storage::disk('productimg')->url($products->file_name) }}" style="height: 250px; width:100%">
                                </div>
                            </div>
                        </div>
                    
                    </div> 
                </div>  
        
            <div class="col-6 border">
                <div class="d-flex justify-content-center m-2">
                    @if (count($products->imgs) < 6 )     
                    <input  accept="image/jpg, image/jpeg" id="image" class="btn btn-primary" type="file" name="productimg[]" multiple>
                    @else
                    <p class="btn btn-danger">Đã đủ file</p>
                    @endif
                </div>
                <div class="container d-flex justify-content-between align-items-center">
                    <div class="container">
                        <div class="row">
                            @foreach ( $products->imgs as $productarray )
                            <div class="col-md-4">
                                <div class="mb-2 border border-primary">
                                    <img src="{{ Storage::disk('productimg')->url($productarray['file_name']) }}">
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-danger" href="{{ url('delete').'/'.$productarray['id'] }}">Delete</a>
                                    </div>

                                </div>
                            </div>
                                @php
                                    $CountImg++;
                                @endphp
                            @endforeach
                        </div>

                        <p>đếm{{ $CountImg }}</p>    
                        
                    </div>
                </div>

            </div>
                        
            </div>
            
        </div>
        
        <div class="container d-flex justify-content-center p-3">
            <a class="btn btn-danger m-3" href="{{ url('managerproduct') }}">Quay lại</a>
            <button class="btn btn-primary m-3" id="buttonsubmit" type='submit'>Cập nhật sản phẩm</button>
            <a class="btn btn-danger m-3" id="buttonDanger" style="display:none;">Cần chọn đúng số lượng file update</a>
        </div>
        
    </form>

    @push('js')
        <script>
            
        </script>
    @endpush

    @section('scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#task-textarea' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
       $("#image").on("change", function() {
        if ($("#image")[0].files.length > 6-(<?php echo $CountImg ?>) ) {
            alert("Update tối đa 6 file");
            document.getElementById('buttonDanger').style.display = "block";
            document.getElementById('buttonsubmit').style.display = "none";
        }
        else{
            document.getElementById('buttonsubmit').style.display = "block";
            document.getElementById('buttonDanger').style.display = "none";
        }
    });
    </script>
    <script>
        function myFunction() {
        document.getElementById("task-textarea").value ={{ $products->description}} ;
        }
    </script>



    @endsection
</main>