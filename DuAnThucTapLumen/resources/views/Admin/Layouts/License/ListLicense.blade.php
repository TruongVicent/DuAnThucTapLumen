@extends('indexAdmin')

@section('adminMain')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách giấy phép</h3>
                        <a href="{{ url('/dashboard/license/add') }}" class="btn btn-primary float-right"> Thêm mới</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Khóa</th>
                                <th>Ngày hết hạn</th>
                                <th>Theme sở hữu</th>
                                <th>Status</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($license as $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->key }}</td>
                                    <td>{{ $value->expiration_date }}</td>
                                    <td>{{ $value->theme->name??'' }}</td>
                                    <td>{{ $value->status }}</td>
                                    <td>

                                        <a href="{{ url('/dashboard/license/edit/'.$value->id) }}"
                                           class="btn btn-primary">Sửa</a>
                                        <button class="btn btn-danger" id="delete" onclick="confirmDelete({{$value->id}})">Xoá
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
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
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Bạn có chắc chắn muốn xoá giấy phép này không?',
                text: "Bạn sẽ không thể khôi phục lại dữ liệu này!",
                icon: 'warning',
                showCancelButton: true,
                 confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Có, xóa!',
                cancelButtonText: 'Không, hủy!'
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteLicense(id);
                }
            });
        }

        function deleteLicense(id) {
            fetch(`/dashboard/license/delete/${id}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        Swal.fire('Lỗi', 'Không thể xoá giấy phép. Lỗi 404.', 'error');
                    } else {
                        Swal.fire('Đã xoá!', 'Giấy phép đã được xoá thành công.', 'success')
                            .then(() => {
                                location.reload(); // Reload the page to update the list
                            });
                    }
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
@endsection

