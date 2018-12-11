@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $product->title }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                      <div class="col-3 text-right">ID</div>
                      <div class="col">{{ $product->id }}</div>
                      <div class="w-100"></div>
                      <div class="col-3 text-right">Title</div>
                      <div class="col">{{ $product->title }}</div>
                      <div class="w-100"></div>
                      <div class="col-3 text-right">Category</div>
                      <div class="col">{{ $product->category }}</div>
                      <div class="w-100"></div>
                      <div class="col-3 text-right">Price</div>
                      <div class="col">{{ number_format($product->price, 2, ',', '.') }}€</div>
                      <div class="w-100"></div>
                      <div class="col-3 text-right">Description</div>
                      <div class="col">{{ $product->description }}</div>
                      <div class="w-100"></div>
                      <div class="col-3 text-right">Actions</div>
                      <div class="col"><a href="{{ url('/products/'.$product->id.'/edit') }}"><button class="btn btn-primary btn-sm">Edit</button></a> <a href="{{ url('/products/'.$product->id.'/delete') }}"><button class="btn btn-danger btn-sm">Delete</button></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
