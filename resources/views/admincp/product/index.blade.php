@extends('layouts.app')
@section('content')
<div class="container">
    @include('layouts.navbar')
</div>    
<div class="card-header" style="margin-top: 12px;text-align: center;font-weight: bold; text-transform: uppercase;">Quản lý sản phẩm</div> 
<div style="display: flex;align-items: center; justify-content: center;margin-top:12px">
  <a href="{{route('product.create')}}" class="btn btn-primary" >Thêm sản phẩm</a> 
</div>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">STT</th>
                          <th scope="col">Tên sản phẩm</th>
                          <th scope="col">Mã sản phẩm</th>
                          <th scope="col">Giá sản phẩm</th>
                          <th scope="col">Hình ảnh</th>
                          <th scope="col">Quản lí</th>
                        </tr>
                      </thead>
                      <tbody class="order_position">
                      @foreach($list as $key=> $pro)
                        <tr id="{{$pro->id}}">
                          <th  scope="row">{{$key + 1}}</th>
                          <td>{{$pro->title}}</td>
                          <td>{{$pro->code}}</td>
                          <td>{{$pro->price}} VNĐ</td>
                          <td>
                            <img width="100" src="{{asset('uploads/product/'.$pro->image)}}" alt="" >
                        </td>
                          <td>
                              {!! Form::open([
                                  'method'=>'DELETE',
                                  'route'=> ['product.destroy',$pro->id],'onsubmit'=>'return confirm("Bạn chắc chắn muốn xóa không?")'
                              ]) !!}
                             
                                  {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}
    
                                  {!! Form::close() !!}
                              <a href="{{route('product.edit',$pro->id)}}" class="btn btn-warning">Sửa</a>
                          
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table> 
             
@endsection
