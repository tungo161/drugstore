@extends('layouts.admin._header')
@extends('layouts.admin._leftnav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    @php
        $sum=0;   
    @endphp
    <main class="mt-5 pt-3">
        <div class="container d-flex justify-content-center pt-3">
            <a class="btn btn-primary" href="{{ url('quan-ly-bai-viet/create')}}">Thêm mới bài viết</a>
        </div>
        
        <div class="container-xl d-xl-flex justify-content-center overflow-scroll p-3">
            <table class="table table-striped table-hover">
                <tr style="border:1px black solid">
                    <th>id</th>
                    <th>tên bài viết</th>
                    <th>Ngày tạo</th>
                    <th>Ngày cập nhật</th>
                    <th>Action 1</th>
                    <th>Action2</th>
                    
                </tr>
                
                @foreach ($posts as $post)
                
                <tr style="border:1px black solid">
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td><a class="btn btn-primary" href='{{ url("quan-ly-bai-viet/{$post->id}/edit") }}'>Update</a></td>
                    <td>
                        <a class="btn btn-danger" href="javascript:void(0)" onclick="document.getElementById('delete-'+{{ $post->id }}).submit()">Delete</a>
                        <form id="delete-{{ $post->id }}" method="POST" action="{{ url("quan-ly-bai-viet/{$post->id}") }}">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @php
                    $sum=0;   
                @endphp
                @endforeach
            </table>
            
        </div>
        <div class="d-flex justify-content-center">
            {!! $posts->onEachSide(1)->links() !!}
        </div>
    </main>
    <script type="text/javascript" src="js.js"></script>
</body>
</html>



    
