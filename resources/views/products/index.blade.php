@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if($products->isEmpty())
                        <p class="text-center">Products list is empty.</p>
                    @else
                    <table class="table table-striped">
                            <thead>
                              <tr>
                                <th style="width: 5%;">#</th>
                                <th style="width: 50%;">Title</th>
                                <th style="width: 30%;" class="text-center">Category</th>
                                <th style="width: 15%;" class="text-center">Price</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($products as $product)
                              <tr>
                                <td>{{ $product->id }}</td>
                                <td><a href="{{ url('products/'.$product->id) }}">{{ $product->title }}</a></td>
                                <td class="text-center">{{ $product->category }}</td>
                                <td class="text-center">{{ number_format($product->price, 2, ',', '.') }}€</td>
                              </tr>
                            @endforeach
                            </tbody>
                          </table>
                    @endif
                    <div class="w-100"></div>
                    <p class="text-center">
                      <a href="{{ url("products/create") }}"><button type="button" class="btn btn-lg btn-primary col-4">Create</button></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
