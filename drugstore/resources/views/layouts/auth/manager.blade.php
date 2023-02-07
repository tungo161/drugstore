{{--Sử dụng layout nào để thực hiện vieew--}}
@include('layouts.apps._header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    
    <div class="container d-flex justify-content-center p-3">
        <table class="table table-striped">
            <tr style="border:1px black solid">
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>address</th>
                <th>account</th>
                <th>phone</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>role</th>
                <th>Action 1</th>

                
            </tr>
            @foreach ($users as $user)
            <tr style="border:1px black solid">
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->account }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>{{ $user->role }}</td>
                
            </tr>
            @endforeach
        </table>
        
    </div>
    <div class="d-flex justify-content-center">
        {!! $users->onEachSide(1)->links() !!}
    </div>
    
    <script type="text/javascript" src="js.js"></script>
</body>
</html>

@include('layouts.apps._footer')


    
