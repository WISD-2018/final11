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
          <h1 class="my-4">狗糧福利社</h1>
          <div class="list-group">
            <li class="list-group-item active">分類</li>
            <a href="{{ route('snack') }}" class="list-group-item list-group-item-action">零食</a>
            <a href="{{ route('feed') }}" class="list-group-item list-group-item-action">飼料</a>
            <a href="{{ route('nutrition') }}" class="list-group-item list-group-item-action">營養品</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="https://cdn.shopify.com/s/files/1/0788/5721/articles/bordercollie_1000x_fc20cc02-7ad2-43ea-a302-baf08ab67d3e_1000x.jpg?v=1498036535" alt="">
            <div class="card-body">
                <h1 class="my-4">好物推薦</h1>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="https://img13.360buyimg.com/n1/jfs/t1/973/23/9607/303561/5bac5ccaE6cd60300/6449aca6a0ff95bd.jpg" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="http://localhost:8000/snack/2">天然手作零食-雞肉脆片100g</a>
                                </h5>
                                <p class="card-text">
                                <li>純天然肉品</li>
                                <li>無任何添加物</li>
                                <li>手工處理食材</li>
                                <li>去除多餘脂肪</li>
                                <li>低溫烘焙</li>
                                <li>營養不流失</li>
                                </p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="https://b.ecimg.tw/items/DEBV7G19008BG0Y/000001_1542272313.jpg" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="http://localhost:8000/feed/1">乾狗糧-牛肉口味15kg</a>
                                </h5>
                                <p class="card-text">
                                <li>Omega3&6</li>
                                <li>含維生素E、D</li>
                                <li>複合碳化合物</li>
                                <li>含鈣、磷、鋅</li>
                                <li>優化蛋白質</li></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://www.books.com.tw/img/N00/066/91/N000669166_t_05.png" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="http://localhost:8000/nutrition/4">愛犬專用綜合維他命+葡萄糖胺</a>
                                </h5>
                                <p class="card-text">
                                <li>健康皮毛</li>
                                <li>補充活力</li>
                                <li>膳食纖維</li>
                                <li>純天然配方</li>
                                <li>cGMP製造標準</li></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="https://b.ecimg.tw/items/DEAK00A84176109/000001_1545789296.jpg" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="http://localhost:8000/snack/8">多效雙刷頭潔牙骨 家庭號桶裝 1400g</a>
                                </h5>
                                <p class="card-text">
                                <li>安心配方</li>
                                <li>維持口腔健康</li>
                                <li>降低口腔異味</li></p>
                            </div>
                        </div>
                    </div>

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
