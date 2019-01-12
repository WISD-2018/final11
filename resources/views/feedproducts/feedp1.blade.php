<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>狗糧福利社-飼料</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/shop-item.css" rel="stylesheet">

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
                    <a class="nav-link" href="/">首頁
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">登入</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">註冊</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">購物車</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">
            <h3 class="my-4">狗糧福利社</h3>
            <div class="list-group">
                <li class="list-group-item active">分類</li>
                <a href="{{ route('snack') }}" class="list-group-item">零食</a>
                <a href="{{ route('feed') }}" class="list-group-item list-group-item-action list-group-item-primary">飼料</a>
                <a href="{{ route('nutrition') }}" class="list-group-item">營養品</a>
            </div>
        </div>
        <!-- /.col-lg-3 -->
        @foreach ($goods as $good2)
            <div class="col-lg-9">

                <div class="card mt-4">
                    <img src="../img/good2-img/{{$good2->photo}}" alt="">
                    <img class="card-img-top img-fluid" src="../img/good2/{{$good2->photo}}" alt="">
                    <div class="card-body">

                        <h3 class="card-title">{{$good2->goodname}} </h3>
                        <h4>NTD {{$good2->price}}</h4>
                        <p class="card-text">
                            {{$good2->gooddetail}}

                        </p>
                        <p>
                            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                            4顆星
                        </p>
                        <a href="{{route('cart.add2',['id'=>$good2->id])}}" class="btn btn-info">加入購物車</a>
                    </div>
                </div>
                <!-- /.card -->



                @endforeach
                <div class="card card-outline-secondary my-4">
                    <div class="card-header">
                        產品評論
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <a href="#" class="btn btn-success">Top</a>
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
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>