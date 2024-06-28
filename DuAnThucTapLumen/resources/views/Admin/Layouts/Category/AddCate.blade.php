@extends('indexAdmin')
@section('adminMain')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Thêm danh mục</h3>
                    </div>
                    <form action="{{ url('dashboard/add-category')}}" method="POST">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="name">Tên danh mục</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nhập tên danh mục">
                        </div>
                        <div class="form-group">
                          <label for="description">Mô tả</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="Nhập mô tả">
                      </div>
                        <div class="form-group">
                          <label for="status">Trạng thái</label>
                            <input type="number" name="status" class="form-control" id="status" placeholder="Nhập trạng thái">
                        </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                      </div>
                    </form>
                  </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
