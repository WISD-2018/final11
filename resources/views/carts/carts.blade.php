<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>狗糧福利社</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
</head>

<body>

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
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            </div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">

                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-lg-9 -->
<center>
    <table>
        <tr>
            <td align="center">商品</td>
            <td align="center">單價</td>
            <td align="center">數量</td>
            <td align="center"> </td>
            <td align="center">總計</td>
        </tr>
        @foreach ($carts as $cart)

            <tr >
                <td width="400" align="center" valign="center">
                    <div class="product-right">
                        <h6>{{$cart->good}}</h6>

                    </div>
                </td>

                <td width="200" align="center" valign="center">
                    <div class="product-right1">
                        <h6>$ {{($cart->cost)}}</h6>
                        <div class="close"> </div>
                    </div>
                </td>

                <td width="50" align="center" valign="center">
                    <div class="product-right1">
                        <h6>{{$cart->quantity}}</h6>
                    </div>
                </td>
                <td width="5" align="center" valign="center">
                    <div class="product-right1">
                        <select name="quantity" onchange="javascript:location.href=this.value;">
                            <option value="">選擇數量</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'1'])}}">1</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'2'])}}">2</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'3'])}}">3</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'4'])}}">4</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'5'])}}">5</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'6'])}}">6</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'7'])}}">7</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'8'])}}">8</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'9'])}}">9</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'10'])}}">10</option>
                        </select>
                    </div>
                </td>

                <td width="200" align="center" valign="center">
                    <div class="product-right1">
                        <h6>$ {{($cart->total)}}</h6>
                        <div class="close"> </div>
                    </div>

                <td width="200" align="center" valign="center">
                    <div class="clear">
                        <form action="{{ route('cart.delete', $cart->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-link"><img src="{{asset('/img/core-img/close.png')}}"></button>
                        </form>
                    </div>
                </td>
                </td>
            </tr>
        @endforeach
    </table>
    <tr >
        <td width="400" align="center" valign="center">
            <div class="product-right">
                <span>帳單總金額：</span>
                <strong>$  <?php echo $a; ?></strong>
            </div>
        </td>

    <div class="container" align="center">

        <button type="submit" class="btn essence-btn"><a href="http://localhost:8000/checkout" class="btn btn-success">下一步</a></button>
    </div>
    <!-- /.container -->

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