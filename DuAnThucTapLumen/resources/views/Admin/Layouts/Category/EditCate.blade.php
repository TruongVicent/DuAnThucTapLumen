@extends('indexAdmin')
@section('adminMain')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Sửa danh mục</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ url('dashboard/update/' . $category->id) }}" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Tên danh mục</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nhập tên danh mục" value="{{ $category->name }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Mô tả</label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Nhập mô tả" value="{{ $category->description }}">
                            </div>
                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <input type="number" name="status" class="form-control" id="status" placeholder="Nhập trạng thái" value="{{ $category->status }}">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <a href="/dashboard/cate" class="btn btn-secondary">Hủy</a>
                        </div>
                    </form>
                  </div>

            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
