@extends('indexAdmin')

@section('adminMain')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sửa giấy phép</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ url('/dashboard/license/update/'. $license->id)}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Khóa</label>
                                <input type="text" class="form-control" name="key" id="key" value="{{ $license->key }}"
                                       placeholder="Key">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ngày hết hạn</label>
                                <input type="date" class="form-control" name="expiration_date" id="expiration_date"
                                       value="{{ $license->expiration_date }}" placeholder="Ngày hết hạng">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Theme</label>
{{--                                <input type="number" class="form-control" name="theme_id" id="theme_id"--}}
{{--                                       placeholder="Theme" required>--}}

                                <select class="form-control" name="theme_id" id="theme_id" required>
                                    <option value="{{$license->theme_id}}">{{$license->theme->name}}</option>
                                    @foreach( $themes as $theme)
                                        <option value="{{ $theme->id }}">{{ $theme->name??'' }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Trạng thái</label>
                                <input type="number" class="form-control" name="status" id="status"
                                       value="{{ $license->status }}" placeholder="trạng thái">
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
                            <button type="submit" class="btn btn-primary">Sửa</button>
                            <button type="submit" class="btn btn-gray">Hủy</button>
                        </div>
                    </form>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
