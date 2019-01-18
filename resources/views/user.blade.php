<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>狗糧福利社-會員</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

</head>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">狗糧福利社</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        {{ __('登出') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">登入</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">註冊</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.index') }}">購物車</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user') }}">購物紀錄</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">


    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="clearfix mr-50 mt-50 mb-50">
            </div>

            <div class="card">
                <div class="card-header"style="text-align:center">{{ __('訂單資料') }}</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">

                    @foreach ($order as $orders)
                        <!-- Single Product -->
                            <div class="contact-info">
                                <div class="single-product-wrapper text-align:center">
                                    <div style="float:left  ; " width="50%">
                                        購買時間：{{$orders->created_at}}
                                        <table class="table">
                                            <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">收件人姓名</th>
                                                <th scope="col">手機號碼</th>
                                                <th scope="col">地址</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{$orders->username}}</td>
                                                <td>{{$orders->userphone}}</td>
                                                <td>{{$orders->useraddress}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="float:right" width="50%">
                                        <br />
                                        <table class="table">
                                            <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">商品</th>
                                                <th scope="col">單價</th>
                                                <th scope="col">數量</th>
                                            </tr>
                                            </thead>
                                            @foreach ($orderdetail as $ordersdetail)
                                                @if($ordersdetail->order_id == $orders->id)
                                                    <tbody>
                                                    <tr>
                                                        <td>{{$ordersdetail->product}}</td>
                                                        <td>{{$ordersdetail->price}}</td>
                                                        <td>{{$ordersdetail->quantity}}</td>
                                                    </tr>
                                                    </tbody>
                                        </table>
                                                @endif
                                            @endforeach
                                        </table>
                                    </div>


                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="clearfix mr-50 mt-50 mb-50">
</div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
