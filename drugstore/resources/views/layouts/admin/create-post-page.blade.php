@extends('layouts.app._style')
@extends('layouts.admin._header')
@extends('layouts.admin._leftnav')
<main class="mt-5 pt-3">
    <form class="form-edit" method="POST" action="{{ url('quan-ly-bai-viet/store') }}" enctype='multipart/form-data'>
        @csrf
        <div class="d-flex justify-content-center p-3">
            <div class="container">
                <div class="input-group mb-3">
                    <label class="input-group-text">Tiêu đề bài viết</label>
                    <input type='text' class="form-control" name='title'>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text">Thumbnail  bài viết</label>
                    <input type='file' class="form-control" name='thumbnail'>
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text">Nội dung</label>
                    <textarea class="form-control" id="task-textarea" name="description"></textarea>
                </div>
            </div>



        </div>

        <div class="container d-flex justify-content-center p-3">
            <a class="btn btn-danger m-2" href="{{ url()->previous() }}">Quay lại</a>
            <button class="btn btn-primary m-2" type='submit'>Thêm bài viết</button>
        </div>

    </form>

    @section('scripts')
        <script>
            ClassicEditor
                .create(document.querySelector('#task-textarea'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endsection
</main>

