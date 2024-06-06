@extends('indexAdmin')

@section('adminMain')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách đơn hàng</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Mã đơn hàng</th>
                                    {{-- <th>Ngày tạo đơn hàng</th> --}}
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Người mua</th>
                                    <th>Email</th>
                                    <td>Số điện thoại</td>
                                    <td>Địa chỉ</td>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>#ORDER1</td>
                                    {{-- <td>22/09/2003</td> --}}
                                    <td>2.000.000 vnđ</td>
                                    <td>Đã thanh toán</td>
                                    <td>Nam</td>
                                    <td>nam@gmail.com</td>
                                    <td>0703374380</td>
                                    <td>Cần Thơ</td>
                                    <td>
                                        <a href="{{ url('/admin-editorder') }}" class="btn btn-primary">Sửa</a>
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
