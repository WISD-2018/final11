
@extends('back.employee')
      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          會員</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
              <tr>
                <th>員工編號</th>
                <th>員工姓名</th>
                <th>員工帳號</th>
                <th>員工電話</th>
                <th>住家地址</th>
                <th>雇用日期</th>
                <th></th>
              </tr>
              </thead>
                <tbody>
                <tr>
                  <form action="/employee/{{$employee->id}}" method="POST" role="form">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                  <td><input name="id" class="form-control" readonly="readonly" placeholder="請輸入員工編號" value="{{$employee->id}}"></td>
                  <td><input name="name" class="form-control" readonly="readonly" placeholder="請輸入員工姓名" value="{{$employee->employeename}}"></td>
                  <td><input name="email" class="form-control" readonly="readonly" placeholder="請輸入員工帳號" value="{{$employee->employeeaccount}}"></td>
                  <td><input name="phone" class="form-control" readonly="readonly" placeholder="請輸入員工電話" value="{{$employee->cellphone}}"></td>
                    <td><input name="country" class="form-control" readonly="readonly" placeholder="請輸入住家地址" value="{{$employee->employeeaddress}}"></td>
                    <td><input name="address" class="form-control" readonly="readonly" placeholder="請輸入雇用日期" value="{{$employee->employmentdate}}"></td>
                    <td><button type="submit" class="btn btn-success">更新</button></td>
                  </form>
                </tr>
                </tbody>

            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

    </div>
    <!-- /.container-fluid -->


