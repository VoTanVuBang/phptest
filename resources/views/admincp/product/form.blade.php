@extends('layouts.app')
@section('content')
<div class="container">
    @include('layouts.navbar')
</div>
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!isset($product))
                    {!! Form::open(['route'=>'product.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                    @else
                    {!! Form::open(['route'=>['product.update',$product->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
                    @endif
                        <div class="form-group">
                            {!! Form::label('title', 'Tên sản phẩm', []) !!}
                            {!! Form::text('title', isset($product) ? $product->title : '', ['class'=>'form-control','placeholder'=>'Nhập tên sản phẩm...']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('code', 'Mã sản phẩm', []) !!}
                            {!! Form::text('code', isset($product) ? $product->code : '', ['class'=>'form-control','placeholder'=>'Nhập mã sản phẩm...']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('price', 'Giá sản phẩm', []) !!}
                            {!! Form::text('price', isset($product) ? $product->price : '', ['class'=>'form-control','placeholder'=>'Nhập vào giá sản phẩm...']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Image', 'Hình ảnh', []) !!}
                            {!! Form::file('image', ['class'=>'form-control-file']) !!}
                            @if(isset($product))
                            <img src="{{asset('uploads/product/'.$product->image)}}" alt="" style="height:100px; width=100px;">
                            @endif
                           </div>
                        @if(!isset($product))
                        {!! Form::submit('Thêm dữ liệu', ['class'=>'btn btn-success']) !!}
                        @else
                        {!! Form::submit('Cập nhật dữ liệu', ['class'=>'btn btn-success']) !!}
                        @endif

                    {!! Form::close() !!}
                {{-- </div>
            </div>
        </div> --}}
        {{-- <table class="table" id="tablephim">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên quốc gia phim</th>
                <th scope="col">Slug quốc gia phim</th>
                <th scope="col">Mô tả quốc gia phim</th>
                <th scope="col">Hiển thị/ Ẩn</th>
                <th scope="col">Quản lí</th>
              </tr>
            </thead>
            <tbody>
            @foreach($list as $key=> $cate)
              <tr>
                <th scope="row">{{$key}}</th>
                <td>{{$cate->title}}</td>
                <td>{{$cate->slug}}</td>
                <td>{{$cate->description}}</td>
                <td>
                    @if ($cate->status)
                        Hiển thị
                    @else
                        Không hiển thị
                    @endif
                </td>
                <td>
                    {!! Form::open([
                        'method'=>'DELETE',
                        'route'=> ['product.destroy',$cate->id],'onsubmit'=>'return confirm("Bạn chắc chắn muốn xóa không?")'
                    ]) !!}
                        {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    <a href="{{route('country.edit',$cate->id)}}" class="btn btn-warning">Sửa</a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table> --}}
        {{-- </div>
    </div> --}}
@endsection
