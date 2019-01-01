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
    <link href="css/4-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">

        <a class="navbar-brand" href="#">狗糧福利社</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <form method="get" action="{{ route('snack') }}">
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
          </form>
        </div>

      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">分類>>>
        <small>零食</small>
      </h1>

      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://img.shop.com/Image/260000/264800/264853/products/1715704876__400x400__.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('snackp1') }}">手作純肉乾</a>
              </h4>
              <p class="card-text"><li>番茄牛肉切條</li>
                <li>鱉蛋雞肉條</li>
                <li>蔓越莓雞肉切條</li>
                <li>起司雞肉方塊</li>
                <li>蘋果牛肉方塊</li></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://img13.360buyimg.com/n1/jfs/t1/973/23/9607/303561/5bac5ccaE6cd60300/6449aca6a0ff95bd.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('snackp2') }}">天然手作零食-雞肉脆片100g</a>
              </h4>
              <p class="card-text">
                <li>100%純天然肉品單</li>
                <li>絕不添加任何添加物</li>
                <li>手工處理食材</li>
                <li>去除多餘脂肪、碎骨頭</li>
                <li>低溫烘焙鎖住養分</li>
                <li>適用於：犬、貓</li></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://image.suning.cn/uimg/b2c/newcatentries/0070144353-000000000167574468_2.jpg_800w_800h_4e" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('snackp3') }}">烘培點心 水果夾心餅/迷你潔牙餅/蔬菜起司餅 500G</a>
              </h4>
              <p class="card-text">
                <li>富含豐富鈣質</li>
                <li>補充Omega 3及6脂肪酸</li>
                <li>天然維他命E及大量纖維質</li>
                <li>礦物質及天然抗氧化劑</li>
                <li>低卡路里輕食無負擔</li>
                </p>
                </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Four</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

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
