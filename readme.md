# 狗糧福利社
## 首頁
![image](https://github.com/WISD-2018/final11/blob/master/public/img/finish/index.PNG?raw=true)
## 商品分類頁面
![image](https://github.com/WISD-2018/final11/blob/master/public/img/finish/good.PNG?raw=true)
## 商品詳細資料頁面
![image](https://github.com/WISD-2018/final11/blob/master/public/img/finish/gooddetail.PNG?raw=true)
## 購物車頁面
![image](https://github.com/WISD-2018/final11/blob/master/public/img/finish/cart.PNG?raw=true)
## 結帳頁面
![image](https://github.com/WISD-2018/final11/blob/master/public/img/finish/checkout.PNG?raw=true)
## 購物紀錄頁面
![image](https://github.com/WISD-2018/final11/blob/master/public/img/finish/order.PNG?raw=true)
## 後台管理頁面
![image](https://github.com/WISD-2018/final11/blob/master/public/img/finish/admin.PNG?raw=true)
## 使用者管理頁面
![image](https://github.com/WISD-2018/final11/blob/master/public/img/finish/backstageuser.PNG?raw=true)
## 訂單管理頁面
![image](https://github.com/WISD-2018/final11/blob/master/public/img/finish/backstageorder.PNG?raw=true)
## 產品管理頁面
![image](https://github.com/WISD-2018/final11/blob/master/public/img/finish/backstageproduct.PNG?raw=true)

## 網站功能
- 會員註冊、登入、驗證、資料顯示(3A532049 游智萱)
    - (Route::auth())&(Route::get('/user'))
- 商品頁面、加入購物車、商品詳細頁面(3A532049 游智萱)
    - (Route::get('/snack'))&(Route::get('/snack/{id}))&(Route::get('/feed'))&(Route::get('/feed/{id}'))&(Route::get('/nutrition'))&(Route::get('/nutrition/{id}'))
- 購物車頁面、購物車數量修改、購物車品項刪除、個人購物車(3A532008 曾敏華)
    - (Route::get('/cart'))&(Route::get('cart/{id}/{q}'))&(Route::delete('cart/delete/{id}'))
- 結帳(3A532008 曾敏華)
    - (Route::get('/checkout'))
- 訂單資訊查詢(3A532008 曾敏華、3A532049 游智萱)
    - (Route::get('/user'))
- 後台介面(首頁、使用者、訂單、商品)及功能(新增、刪除、修改)(3A532027 黃詩敏)
    - (Route::get('/admin'))&(Route::get('/BackstageUser'))&(Route::get('/BackstageUser/edit/{id}'))&(Route::patch('/BackstageUser/update/{id}'))&(Route::delete('/BackstageUser/delete/{id}'))&(Route::get('/BackstageOrder'))&(Route::get('/BackstageOrder/edit/{id}'))&(Route::patch('/BackstageOrder/update/{id}'))&(Route::delete('/BackstageOrder/delete/{id}'))&(Route::get('/BackstageProduct'))&(Route::get('/BackstageProduct/edit/{id}'))&(Route::get('/BackstageProduct/edit2/{id}'))&(Route::get('/BackstageProduct/edit3/{id}'))&(Route::patch('/BackstageProduct/update/{id}'))&(Route::patch('/BackstageProduct/update2/{id}'))&(Route::patch('/BackstageProduct/update3/{id}'))&(Route::delete('/BackstageProduct/delete/{id}'))&(Route::get('/BackstageProduct/create'))&(Route::post('/BackstageProduct'))

## 系統的作用
- 提供飼主線上購物的需求，減少購物的時間

## 初始專案與DB負責的同學
- 專案初始：游智萱
- DB：曾敏華、黃詩敏、游智萱(三人都有完成各自負責的部分)

## 額外使用的套件或樣板
- 商店樣式的樣板(https://startbootstrap.com/template-categories/all/)
- 表格、邊框、按鈕...等樣式https://getbootstrap.com/)

## 系統復原步驟
1. >至https://github.com/WISD-2018/final11.git此網址clone本專案
2. >composer install(專案復原)
3. >copy .env.example .env
4. >artisan key:generate
5. >匯入資料庫：https://github.com/WISD-2018/final11/blob/master/database/asset.sql
6. >修改.env內容：DB_PORT=33060、DB_DATABASE=asset、DB_USERNAME=root、DB_PASSWORD=root

## 系統使用帳號
帳號：1234@gmail.com
密碼：123456

## 系統開發人員
- 四資三甲 3A532008 [曾敏華](https://github.com/3A532008)(購物車、結帳)
- 四資三甲 3A532027 [黃詩敏](https://github.com/3A532027)(後台)
- 四資三甲 3A532049 [游智萱](https://github.com/3A532049)(商品相關頁面、會員)





