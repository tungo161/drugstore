
@include('layouts.apps._header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap-5.3.0-alpha1-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="/bootstrap-icons-1.10.3/bootstrap-icons.css" />
</head>
<body>
    <form  method="POST" action="{{ url('login')}}">
        @csrf

        
        <!-- Email input -->
        <div class="d-flex justify-content-center p-5">
            
            <div class="w-50 p-3 border border-primary rounded">
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Email</label>
                    <input type="email" name="email" id="form2Example1" class="form-control" />
                </div>
                
                    <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Mật khẩu</label>
                    <input type="password" name="password" id="form2Example2" class="form-control" />
                </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-block mb-4 w-75">Đăng nhập</button>
                        
                    </div>
                    @if($jsAlert)
                    <p class="alert alert-warning">{{ $jsAlert }}</p>
                    @endif
                    
                    <div class="text-center">
                        <p>Chưa có tài khoản? <a href="{{ url('register')}}" style="display:inline-block">Đăng kí</a></p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="bi bi-facebook"></i>
                        </button>
                    
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="bi bi-google"></i>
                        </button>
                    
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="bi bi-twitter"></i>
                        </button>
                    
                        <button type="submit" class="btn btn-link btn-floating mx-1">
                            <i class="bi bi-github"></i>
                        </button>
                        </div>
                    
            </div>
        </div>
        
        
            <!-- Register buttons -->
            
        </form>
    
        @if(session()->has('alert'))
        <script>
            alert({{ session()->get('alert') }});
        </script>
        @endif 
    </body>
</html>

@include('layouts.apps._footer') 