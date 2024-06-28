<!-- resources/views/Admin/Layouts/Theme/EditTheme.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Theme</h2>
        <form action="{{ url('/dashboard/update/' . $theme->id) }}" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Tên</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $theme->name }}" required>
                </div>
                <div class="form-group">
                    <label for="price">Giá</label>
                    <input type="number" name="price" class="form-control" id="price" value="{{ $theme->price }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Mô tả</label>
                    <textarea name="description" class="form-control" id="description" required>{{ $theme->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="thumbnail">Hình ảnh</label>
                    <input type="file" name="thumbnail" class="form-control" id="thumbnail">
                    <p>Current thumbnail: {{ $theme->thumbnail }}</p>
                </div>
                <div class="form-group">
                    <label for="slug">Đường dẫn</label>
                    <input type="text" name="slug" class="form-control" id="slug" value="{{ $theme->slug }}" required>
                </div>
                <div class="form-group">
                    <label for="status">Trạng thái</label>
                    <select name="status" class="form-control" id="status" required>
                        <option value="0" {{ $theme->status == 0 ? 'selected' : '' }}>Inactive</option>
                        <option value="1" {{ $theme->status == 1 ? 'selected' : '' }}>Active</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="file">Thư mục</label>
                    <input type="file" name="file" class="form-control" id="file">
                    <p>Current file: {{ $theme->file }}</p>
                </div>
                <div class="form-group">
                    <label for="category_id">Danh mục</label>
                    <select name="category_id" class="form-control" id="category_id" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $theme->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Sửa</button>
                <a href="{{ url('/dashboard/theme') }}" class="btn btn-secondary">Hủy</a>
            </div>
        </form>
    </div>
@endsection
