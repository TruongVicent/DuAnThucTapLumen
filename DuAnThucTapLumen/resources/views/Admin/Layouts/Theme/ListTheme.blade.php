@extends('indexAdmin')

@section('adminMain')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách theme</h3>
                        <a href="{{ url('/dashboard/addtheme') }}" class="btn btn-primary float-right"> Thêm mới</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên theme</th>
                                    <th>Giá</th>
                                    <th>Hình ảnh</th>
                                    <th>Đường dẫn</th>
                                    <th>Trạng thái</th>
                                    <th>Thư mục</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>adminLTE</td>
                                    <td>1.000.000 vnđ</td>
                                    <td>ảnh1.jpg</td>
                                    <td>slug-1</td>
                                    <td>Live</td>
                                    <td>theme.rar</td>
                                    <td>
                                        <a href="{{ url('/dashboard/edittheme') }}" class="btn btn-primary">Sửa</a>
                                        <a href="#"class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
