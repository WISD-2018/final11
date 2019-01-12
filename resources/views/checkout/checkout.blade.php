@extends('layouts.master')
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
                    <a class="nav-link" href="#">購物車</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@section('page-title', '結帳')

@section('page-style')
<link href="{{ asset('css/form-validation.css') }}" rel="stylesheet">
@endsection

@section('page-script')
@endsection

@section('page-content')

    <div class="container">
        <div class="py-5 text-center">
            <h2>結帳</h2>
        </div>
        <div class="col-12 col-md-6">
            <div class="checkout_details_area mt-50 clearfix">

                <div class="cart-page-heading mb-30">
                    <h5>帳單地址</h5>
                </div>

                <form action="/orders" method="post"role="form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 mb-3">

                            <label for="name">收件人姓名<span>*</span></label>
                            <input type="text" class="form-control" name="name" maxlength="8" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="address">地址 <span>*</span></label>
                            <input type="text" class="form-control mb-3" name="address" maxlength="35" required>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="ph_number">電話號碼 <span>*</span></label>
                            <input type="text" class="form-control" name="ph_number" min="0" maxlength="10" required>
                        </div>
                        <div class="col-md-6 mb-3">

                        </div>

                        <div class="row">
                            <div class="col-md-12 order-md-12 mb-12">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>帳單總金額：</span>
                                    <strong>$  <?php echo $a; ?></strong>
                                </li>
                                <ul class="list-group mb-3">

                                </ul>
                            </div>
                        </div>

                        <div class="container" align="center">
                            <button type="submit" class="btn essence-btn">結帳</button>
                        </div>
                        <div class="col-12">

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
