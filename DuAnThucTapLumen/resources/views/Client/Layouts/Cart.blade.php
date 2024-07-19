@extends('index')
@section('main')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Giỏ hàng</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/')}}">Trang chủ</a></li>
                        <li>Giỏ hàng</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- start about-page-about-area -->
    <section class="about-page-about-area section-padding">
        <div class="container">
            <div class="row">
                <!-- Cart Items Section -->
                <div class="col col-md-6">
                    <h2>Giỏ hàng của bạn</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Hình ảnh</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($cart as $item)
                           <tr>
                            <td>{{$item->theme_name}}</td>
                            <td>{{$item->price}}</td>
                            <td><img src="{{ url('/storage/' . $item->thumbnail) }}" alt="{{ $item->name }}"></td>
                            <td>
                                <form action="{{ url('/delete/'.$item->id )}}" method="post">
                                    <button   onclick="return confirm('Xóa Thành Công')">Xóa</button>
                                </form>
                            </td>
                           </tr>  

                           @endforeach         
                        </tbody>
                    </table>
                </div>

                <!-- Buyer Information Section -->
                <div class="col col-md-6">
                    <h2>Thông tin người mua</h2>
                    <form action="" method="">
                        <div class="form-group">
                            <label for="name">Tên</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$cartuser->fullname}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{$cartuser->email}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Thanh toán</button>
                    </form>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end about-page-about-area -->
@endsection
