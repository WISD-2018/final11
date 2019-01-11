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
  <link href="../css/4-col-portfolio.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">

    <a class="navbar-brand" href="/">狗糧福利社</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive" >
      <form method="get" action="{{ route('feed') }}" >
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">
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
      </form>
    </div>

  </div>
</nav>

<!-- Page Content -->
<div class="container">

  <!-- Page Heading -->
  <h1 class="my-4">分類>>>
    <small>飼料</small>
  </h1>
  @foreach ($goods as $good2)
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="../img/good2/{{$good2->photo}}" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="{{ route('feed.detail',['id'=>$good2->id]) }}">{{$good2->goodname}}</a>
            </h4>
            <p class="card-text"><li>{{$good2->gooddetail}}</p>
          </div>
        </div>
      </div>
    </div>
</div>
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
