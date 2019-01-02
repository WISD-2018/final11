<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>狗糧福利社-營養品</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

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
          <form method="get" action="{{ route('nutrition') }}">
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
        <small>營養品</small>
      </h1>

      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://image-cdn-flare.qdm.cloud/q61484b9fbe11d/image/cache/data/feed/NUTRO/Essentials/Senior/Chicken/9dd369233110ee0489742c18740f687f_1-cr-200x200.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('nutritionp1') }}">全護營養系列-高齡犬配方（農場鮮雞+糙米+地瓜）7kg</a>
              </h4>
              <p class="card-text">
              <li>優質鮮肉</li>
              <li>有助維持認知健康</li>
              <li>維持健康的抵抗力</li>
              <li>有助皮膚健康、毛髮亮麗</li>
              <li>有助於關節保健</li>
              <li>七歲以上高齡犬專用</li></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://image-cdn-flare.qdm.cloud/q61484b9fbe11d/image/cache/data/feed/TOMAPRO/Original/AdultLamb/c4ab99799eeb45feb09af6864385b245-max-440.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('nutritionp2') }}">成犬骨關節強化配方 7kg</a>
              </h4>
              <p class="card-text">
              <li>潤滑關節維持軟骨組織</li>
              <li>大顆粒，慢食幫助潔牙</li>
              <li>整腸助消化 營養好吸收</li>
              <li>全面升級添加藜麥</li></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://e.ecimg.tw/items/QFAW5GA9008VAKH/000001_1521624211.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('nutritionp3') }}">原生營養保健-幼犬成長發育配方 50g</a>
              </h4>
              <p class="card-text">
              <li>幫助初生幼齡犬成長所需</li>
              <li>豐富原生天然營養</li>
              <li>補充維他命A至Zinc</li>
              <li>富含珍貴海洋食材</li>
              <li>任何年齡適用(特別是幼犬)</li></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://www.books.com.tw/img/N00/066/91/N000669166_t_05.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('nutritionp4') }}">愛犬專用綜合維他命+葡萄糖胺</a>
              </h4>
              <p class="card-text">
              <li>健康皮膚及毛髮</li>
              <li>補充活力</li>
              <li>膳食纖維幫助消化</li>
              <li>100%純天然配方</li>
              <li>cGMP製造標準</li></p>
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
