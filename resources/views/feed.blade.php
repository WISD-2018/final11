<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>狗糧福利社-飼料</title>

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
          <form method="get" action="{{ route('feed') }}">
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

      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://b.ecimg.tw/items/DEBV7G19008BG0Y/000001_1542272313.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('feedp1') }}">乾狗糧-牛肉口味15kg</a>
              </h4>
              <p class="card-text">
              <li>理想的Omega3&6</li>
              <li>富含維生素E、D</li>
              <li>複合碳化合物</li>
              <li>富含鈣、磷、鋅</li>
              <li>優化蛋白質</li>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://ct.yimg.com/xd/api/res/1.2/w2H66OP_OydA0uauMSMEcA--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD0xMDAwO3E9ODU7cm90YXRlPWF1dG87dz0xMDAw/https://s.yimg.com/ob/image/1421cce6-8090-4c40-876a-18b5a2fd57d5.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('feedp2') }}">寵物食譜國產新配方 (羊肉+七蔬果) 狗飼料 15kg</a>
              </h4>
              <p class="card-text">
              <li>富含DHA&鱈魚油</li>
              <li>天然紅羅蔔素及維生素A</li>
              <li>幫助寵物提升免疫力</li>
              <li>毛髮柔亮配方</li></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://d.ecimg.tw/items/DEBV7GA9008G0JR/000001_1506677672.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('feedp3') }}">健康主義無榖犬糧-放牧羊454g</a>
              </h4>
              <p class="card-text">
              <li>保護胃壁幫助消化</li>
              <li>促進新陳代謝</li>
              <li>抗老化</li>
              <li>尿道系統健康</li>
              <li>避免寵物罹患皮膚疾病</li>
              <li>舒緩脹氣及減緩焦慮</li>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://img4.momoshop.com.tw/goodsimg/0005/231/217/5231217_R.jpg?t=1511347880" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{ route('feedp4') }}">成犬7歲以上活力長壽配方 8kg</a>
              </h4>
              <p class="card-text">
              <li>恢復年輕活力的營養</li>
              <li>臨床實證抗氧化配方</li>
              <li>不含人工色素及香料</li></p>
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
