@extends('indexAdmin')

@section('adminMain')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm Theme</h3>
                    </div>
                    <form action="{{ url('/dashboard/add-theme') }}" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Tên</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nhập tên" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Giá</label>
                                <input type="number" name="price" class="form-control" id="price" placeholder="Nhập giá" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Mô tả</label>
                                <textarea name="description" class="form-control" id="description" placeholder="Nhập mô tả" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="thumbnail">Hình ảnh</label>
                                <input type="file" name="thumbnail" class="form-control" id="thumbnail" required>
                            </div>
                            <div class="form-group">
                                <label for="slug">Đường dẫn</label>
                                <input type="text" name="slug" class="form-control" id="slug" placeholder="Nhập slug" required>
                            </div>
                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <select name="status" class="form-control" id="status" required>
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="file">Thư mục</label>
                                <input type="file" name="file" class="form-control" id="file" required>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Danh mục</label>
                                <select name="category_id" class="form-control" id="category_id" required>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            <button type="button" class="btn btn-gray" onclick="history.back()">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
