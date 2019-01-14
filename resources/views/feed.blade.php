<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>狗糧福利社</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/4-col-portfolio.css" rel="stylesheet">

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
            <div class="list-group">
                <li class="list-group-item active">分類</li>
                <a href="{{ route('snack') }}" class="list-group-item list-group-item-action">零食</a>
                <a href="{{ route('feed') }}" class="list-group-item list-group-item-action list-group-item-primary">飼料</a>
                <a href="{{ route('nutrition') }}" class="list-group-item list-group-item-action">營養品</a>
            </div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">
            <!-- Page Content -->
            <div class="container">
                <div class="row">
                    <!-- Page Content -->
                    <div class="container">
                        @foreach ($goods as $good2)
                            <div class="row">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="../img/good2/{{$good2->photo}}" alt="Card image cap">
                                </div>
                                <div class="col-md-5">
                                    <h3><a href="{{ route('feed.detail',['id'=>$good2->id]) }}">{{$good2->goodname}}</a></h3>
                                    <p class="card-text"><li>{{$good2->gooddetail}}</p>
                                    <a class="btn btn-primary" href="{{ route('feed.detail',['id'=>$good2->id]) }}">商品詳情</a>
                                </div>
                            </div>
                            <hr>
                            <!-- /.row -->
                    @endforeach
                    <!-- Pagination -->
                    </div>
                    <!-- /.container -->
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col-lg-9 -->
    </div>
</div>
<!-- /.container -->




<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
