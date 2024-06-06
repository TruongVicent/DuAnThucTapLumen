@extends('indexAdmin')

@section('adminMain')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">Thông tin đơn hàng</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Mã đơn hàng</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">ngày tạo đơn hàng</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tổng đơn</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Trạng thái</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tên theme</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Hình ảnh</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Số lượng</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Đơn giá</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                    </div>
                    <div class="card-header">
                      <h3 class="card-title">Thông tin khách hàng</h3>
                    </div>
                    <div  class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Người tạo đơn hàng</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Số điện thoại</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Địa chỉ</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                    </div>
                  </div>
                <div class="card-footer">
                  <a href="#" class="btn btn-primary">Sửa</a>
                </div>
              </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
