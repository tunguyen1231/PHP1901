@extends('admin.layouts.layout')

@section('title')
    Thêm mới sản phẩm
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2 style="text-align: center">Thêm sản phẩm</h2>

    <div class="container" style="width: 900px; margin-top: 20px;">
        <form action="{{url('admin/products')}}" name="product" method="post">
            <!-- Tạo ra thẻ input ẩn chứa giá trị token -->
            {{csrf_field()}}
            <div class="form-group">
                <label>Tên sản phẩm</label>
                <input type="text" class="form-control" name="product_name">
            </div>
            <div class="form-group">
                <label>Slug sản phẩm</label>
                <input type="text" class="form-control" name="product_slug">
            </div>
            <div class="form-group">
                <label>Link sản phẩm</label>
                <input type="text" class="form-control" name="product_image">
            </div>
            <div class="form-group">
                <label>Mô tả sản phẩm</label>
                <input type="text" class="form-control" name="product_description">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

@endsection