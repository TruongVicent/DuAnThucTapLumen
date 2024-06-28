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
{{--                                    <th>Đường dẫn</th>--}}
{{--                                    <th>Trạng thái</th>--}}
                                    <th>Thư mục</th>
                                    <th>Mô tả</th>
                                    <th>Danh mục</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($themes as $theme)
                                <tr>
                                    <td>{{ $theme->id }}</td>
                                    <td>{{ $theme->name }}</td>
                                    <td>{{ $theme->price }}</td>
                                    <td>{{ $theme->thumbnail}}</td>
{{--                                    <td>{{ $theme->slug}}</td>--}}
{{--                                    <td>{{ $theme->status}}</td>--}}
                                    <td>{{ $theme->file}}</td>
                                    <td>{{$theme->description}}</td>
                                    <td>{{ $theme->category->name ?? ''}}</td> <!-- Hiển thị tên danh mục -->
                                    <td>
                                        <a href="{{ url('/dashboard/edit/' . $theme->id) }}" class="btn btn-primary">Sửa</a>
                                        <button onclick="deleteTheme({{ $theme->id }})" class="btn btn-danger">Xóa</button>
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
            </div>
        </section>
    </div>
    <script>
        function deleteTheme(id) {
            if (confirm('Bạn có chắc chắn muốn xóa theme này?')) {
                fetch('/dashboard/deletetheme/' + id, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert(data.success);
                            location.reload(); // Reload the page
                        } else {
                            alert('Đã xảy ra lỗi khi xóa theme.');
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
        }
    </script>

@endsection
