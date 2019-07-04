@extends('admin.layouts.layout')

@section('title')
    Chỉnh sửa sản phẩm
@endsection

@section('content')
    <div class="container">
        <h2 style="text-align: center">Chỉnh sửa thông tin sản phẩm </h2>
        <form style="width: 900px; margin-top: 20px;" action="{{url('admin/products/edit/'.$product->id)}}" name="product" method="post">
            {{--            // Tạo ra thẻ input ẩn chứa giá trị token--}}
            {{csrf_field()}}
            <div class="form-group">
                <label>Tên sản phẩm</label>
                <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}">
            </div>
            <div class="form-group">
                <label>Slug sản phẩm</label>
                <input type="text" class="form-control" name="product_slug" value="{{$product->product_slug}}">
            </div>
            <div class="form-group">
                <label>Hình ảnh sản phẩm</label>
                <input type="text" class="form-control" name="product_image" value="{{$product->product_image}}">
                <img style="display: block;width: 100px;margin: 0 auto;"  src="{{ $product->product_image }}">
            </div>
            <div class="form-group">
                <label>Mô tả sản phẩm</label>
                <input type="text" class="form-control" name="product_description" value="{{$product->product_description}}">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection
