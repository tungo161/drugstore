@include('layouts.apps._header')

<form class="form-edit" method="POST" action="{{ url("managerproduct/store") }}" enctype='multipart/form-data'>
    @csrf
    <div class="pro-edit">
        <div class="pro-col d-flex align-items-center justify-content-center">
            <div class="d-flex justify-content-center p-3">
                <div class="pro-col-content">
                    <div class="input-group mb-3">
                        <label class="input-group-text">Tên sản phẩm</label>
                        <input type='text' class="form-control" name='name'>
                    </div>
                
                
                    <div class="input-group mb-3">
                        <label class="input-group-text">giá</label>
                        <input type='text' class="form-control" name='price'>
                        <span class="input-group-text">VNĐ</span>
                    </div>
                
                    <div class="input-group mb-3">
                        <label class="input-group-text">Công dụng</label>
                        <input type='text' class="form-control" name='benefit'>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text">Mô tả</label>
                        <textarea class="form-control" id="task-textarea" name="description"></textarea>
                        
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text">Số lượng</label>
                        <input type='number' class="form-control" name='quantity'>
                    </div class="pro-row">
            
                    <label class="input-group-text" for="manufaturer">Công ty sản xuất:</label>
                        <select class="form-select" aria-label="Default select example" name="manufacturers_id" id="manufaturer">
                            @foreach ($manufaturers as $manufaturer)
                            <option value="{{ $manufaturer->id }}"> {{ $manufaturer->name }}</option>
                            @endforeach
                        </select>
                    </div>
                
                </div> 
            </div>  
            <div class="pro-col d-flex align-items-center justify-content-center">
                <div class="d-flex justify-content-center p-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text">Chọn ảnh hiển thị</label>
                        <input type='file' class="form-control" name='showimg'>
                    </div>
                </div>                
            </div>              
        </div>

        
        
    </div>
    
    <div class="container d-flex justify-content-center p-3">
        <button class="btn btn-primary" type='submit'>Thêm sản phẩm</button>
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