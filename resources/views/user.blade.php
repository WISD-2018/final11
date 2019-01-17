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

<div class="container">


    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="clearfix mr-50 mt-50 mb-50">
            </div>

            <div class="card">
                <div class="card-header"style="text-align:center">{{ __('個人資料') }}</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    會員名稱： <span class="caret"></span><br>
                    電子信箱： <span class="caret"></span><br>
                </div>


                <div class="card-body" aria-labelledby="navbarDropdown">
                    <a class="card-body" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        {{ __('登出') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


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
                                        <table class="table" border="0">
                                            <tr bgcolor="#eeeeee">
                                                　<td width="94" align="center" >收件人姓名</td>
                                                　<td width="70" align="center">手機號碼</td>
                                                　<td width="200" align="center">地址</td>
                                            </tr>
                                            <tr>
                                                　<td width="94" align="center">{{$orders->username}}</td>
                                                　<td width="70" align="center">{{$orders->userphone}}</td>
                                                　<td width="200" align="center">{{$orders->useraddress}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div style="float:right" width="50%">
                                        <table class="table mt-21" border="0">
                                            <tr bgcolor="#f5f5f5">
                                                <td width="66" align="center">商品</td>
                                                <td width="52" align="center">單價</td>
                                                <td width="52" align="center">數量</td>
                                            </tr>
                                            @foreach ($orderdetail as $ordersdetail)
                                                @if($ordersdetail->order_id == $orders->id)

                                                    <tr>
                                                        <td width="66" align="center">{{$ordersdetail->product}}</td>
                                                        <td width="52" align="center">{{$ordersdetail->price}}</td>
                                                        <td width="52" align="center">{{$ordersdetail->quantity}}</td>
                                                    </tr>
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
