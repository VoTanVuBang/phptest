@extends('layouts.app')
@section('content')
<div class="container">
    @include('layouts.navbar')
</div>
<div class="container" style="margin-top: 12px;"> 
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Management') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Chào mừng Admin') }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
