@extends('admin.layouts.layout')

@section('title')
    Danh sách sản phẩm
@endsection

@section('content')
    <div class="container" style="width:100%;">
        <h2>Danh sách sản phẩm</h2>
        <p style="margin: 20px 0;"><a href="{{url('admin/products/create')}}" class="btn btn-success">Thêm sản phẩm</a></p>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Tên sản phẩm</th>
                <th>Slug sản phẩm</th>
                <th>Hình ảnh sản phẩm</th>
                <th>Mô tả sản phẩm</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_slug }}</td>
                    <td><img style="display: block;width: 100px;margin: 0 auto;"  src="{{ $product->product_image }}"></td>
                    <td>{{ $product->product_description }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ url ('admin/products/edit/'.$product->id) }}">Sửa</a>
                        <a class="btn btn-danger" href="{{ url ('admin/products/delete/'.$product->id) }}">Xóa</a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
@endsection