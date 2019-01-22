@extends('layouts.admin')

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>後台 - 訂單修改</title>

    <!-- Bootstrap core CSS -->
    <link href="SecondHand/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="SecondHand/public/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">







          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <li class="nav-item active">
              <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000">購物首頁
                  <span class="sr-only">(current)</span>
                </a></font>
            </li>
            <li class="nav-item active">
              <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000/admin">管理員首頁
                  <span class="sr-only">(current)</span>
                </a></font>
            </li>
            @guest
              <li class="nav-item">
                <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000/login">登入</a></font>
              </li>

              @if (Route::has('register'))
                <li class="nav-item">
                  <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000/register">註冊</a></font>
                </li>
              @endif
            @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><font face="微軟正黑體">
                    {{ Auth::user()->name }} </font><span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <font face="微軟正黑體"><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      {{ __('登出') }}
                    </a></font>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
            @endguest
          </ul>
        </ul>
      </div>
    </div>
  </nav>


    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">

          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-10 mx-auto">
        <div class="post-preview">



        <!--CSS太難看-->
          <h1>     </h1><br>
        <!--所以靠他們調整版面一下-->
          <font face="微軟正黑體">
            <br/>
            <br/>
            <br/>
          </font>
          <h1><font face="微軟正黑體">編輯訂單</font></h1>
          <div class="row">
            <div class="col-lg-12">
              <form action="/BackstageOrder/update/{{$order->id}}" method="POST" role="form">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <font face="微軟正黑體">
                  <div class="form-group">
                    <label>訂單編號：</label>
                    <input type="increments" class="form-control" name="id" placeholder="請輸入訂單編號" value="{{$order->id}}" >
                  </div>

                  <div class="form-group">
                    <label>顧客編號：</label>
                    <input type="integer" class="form-control" name="user_id" placeholder="請輸入顧客編號" value="{{$order->user_id}}">
                  </div>

                  <div class="form-group">
                    <label>顧客姓名：</label>
                    <input type="string" class="form-control" name="username" placeholder="請輸入顧客姓名" value="{{$order->username}}">
                  </div>

                  <div class="form-group">
                    <label>顧客電話：</label>
                    <input type="string" class="form-control" name="userphone" placeholder="請輸入顧客電話" value="{{$order->userphone}}">
                  </div>
                  <div class="form-group">
                    <label>住家地址：</label>
                    <input type="string" class="form-control" name="useraddress" placeholder="請輸入住家地址" value="{{$order->useraddress}}">
                  </div>
                  <div class="form-group">
                    <label>下單日期：</label>
                    <input type="dateTime" class="form-control" name="created_at" placeholder="請輸入下單日期" value="{{$order->created_at}}">
                  </div>

                <div class="col-lg-12 col-md-10 mx-auto">
                  <button type="submit" class="btn btn-primary"><font face="微軟正黑體" size="4px" >更新</font></button>
                  <a href="http://localhost:8000/BackstageProduct" ><button class="btn btn-primary" type="button"><font face="微軟正黑體" size="4px" >返回</font></button></a>
                </div>
                </font>

              </form>

            <br>


            </div>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>



  </body>

</html>
