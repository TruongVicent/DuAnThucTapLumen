@extends('indexAdmin')

@section('adminMain')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Thêm theme</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Giá</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mô tả</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hình ảnh</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Đường dẫn</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Trạng thái</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Thư mục</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                         
                        {{-- <div class="form-group">
                          <label for="exampleInputFile">File input</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text">Upload</span>
                            </div>
                          </div>
                        </div> --}}
                        
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                        <button type="submit" class="btn btn-gray">Hủy</button>
                      </div>
                    </form>
                  </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
