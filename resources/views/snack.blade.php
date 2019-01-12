<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>狗糧福利社-零食</title>

      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="css/1-col-portfolio.css" rel="stylesheet">

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
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">登入</a>
                  </li>
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

      <!-- Page Heading -->
      <h1 class="my-4">分類>>>
        <small>零食</small>
      </h1>
      @foreach ($goods as $good)
      <div class="row">
          <div class="col-md-7">
              <a href="#">
                  <img class="img-fluid rounded mb-3 mb-md-0" src="../img/good/{{$good->photo}}" alt="">
              </a>
          </div>
          <div class="col-md-5">
              <h3><a href="{{ route('snack.detail',['id'=>$good->id]) }}">{{$good->goodname}}</a></h3>
              <p class="card-text"><li>{{$good->gooddetail}}</p>
              <a class="btn btn-primary" href="{{ route('snack.detail',['id'=>$good->id]) }}">商品詳情</a>
          </div>
      </div>
            <hr>
      <!-- /.row -->
    @endforeach
      <!-- Pagination -->


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
