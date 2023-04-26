@extends('layouts.app._style')
@extends('layouts.admin._header')
@extends('layouts.admin._leftnav')

<main class="mt-5 pt-3">
    <form class="container" method="POST" action="{{ url("quan-ly-bai-viet/{$posts->id}") }}"
        enctype='multipart/form-data'>
        @csrf
        @method('PUT')
                <div class='border'>
                    <div class='container'>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Tên bài viết</label>
                            <input type='text' name='title' value="{{ $posts->title }}" class="form-control @error('title') is-invalid @enderror " />
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Thumbnail  bài viết</label>
                            <input type='file' class="form-control" name='thumbnail'>
                        </div>
                        <div class="d-flex justify-content-center">
                            <img src="{{ Storage::disk('postImg')->url($posts->file_name) }}"
                                style="height: 250px; width:250px">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Nội dung</label>
                            <textarea class="form-control w-100" id="task-textarea" name="description">{{ $posts->description }}</textarea>
                        </div>
                    </div>
                </div>

        <div class="container d-flex justify-content-center p-3">
            <a class="btn btn-danger m-3" href="{{ url('quan-ly-bai-viet') }}">Quay lại</a>
            <button class="btn btn-primary m-3" id="buttonsubmit" type='submit'>Cập nhật bài viết</button>
            

    </form>

    @push('js')
        <script></script>
    @endpush

    @section('scripts')
        <script>
            ClassicEditor
                .create(document.querySelector('#task-textarea'))
                .catch(error => {
                    console.error(error);
                });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
            integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            function myFunction() {
                document.getElementById("task-textarea").value = {{ $posts->description }};
            }
        </script>
    @endsection
</main>
