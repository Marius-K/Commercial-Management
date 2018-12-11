@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $supplier->title }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                      <div class="col-3 text-right">ID</div>
                      <div class="col">{{ $supplier->id }}</div>
                      <div class="w-100"></div>
                      <div class="col-3 text-right">Name</div>
                      <div class="col">{{ $supplier->name }}</div>
                      <div class="w-100"></div>
                      <div class="col-3 text-right">Category</div>
                      <div class="col">{{ product_title($supplier->product) }}</div>
                      <div class="w-100"></div>
                      <div class="col-3 text-right">Actions</div>
                      <div class="col"><a href="{{ url('/suppliers/'.$supplier->id.'/edit') }}"><button class="btn btn-primary btn-sm">Edit</button></a> <a href="{{ url('/suppliers/'.$supplier->id.'/delete') }}"><button class="btn btn-danger btn-sm">Delete</button></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
