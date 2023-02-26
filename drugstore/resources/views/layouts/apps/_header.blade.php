<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@extends('layouts.apps._style')
<body>
    @php
        $totalpro=0;
    @endphp
    <nav class="navbar navbar-expand-lg bg-primary-subtle">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('') }}">
                            <img   src="/img/logobr/logodrug.png" class="d-block" style="width:50px; height:50px; padding:0;">
                        </a>
                    </li>
                </ul>
                <div class="d-flex" role="search">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if(Auth::check())
                            @if(Auth::user()->role==1)
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('admin') }}">Admin</a>
                            </li>
                            @endif
                        @endif
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('') }}">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('products') }}">Sản phẩm</a>
                        </li>
                    
                            
                        <li class="nav-item">
                            
                            <a class="nav-link active" aria-current="page" href="{{ url('cart') }}">
                                
                                @if(session('cart'))
                                    @foreach (session('cart') as $id => $products)
                                    @php

                                            $totalpro+=$products['quantity'];
                                    @endphp
                                    @endforeach
                                {{ $totalpro }}
                                
                                @endif<i class="bi bi-cart"></i> Giỏ hàng</a>
 
    
                            
                        </li>
                        @if(Auth::check())
                        <li class="dropdown">
                            <a class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer">
                                Xin chào {{ Auth::user()->name}}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{url('profileuser')}}">Thông tin cá nhân</a></li>
                                <li><a class="dropdown-item" href="#!" onclick="document.getElementById('logout-form').submit()">Đăng xuất</a>
                                    <form method="POST" action="{{ url('logout') }}" id="logout-form">
                                        @csrf
                                    </form></li>
                                </ul>
                            </li>

                        @else
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('login') }}">Đăng nhập</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
            </div>
        </nav>

    
</body>


</html>