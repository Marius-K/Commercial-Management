@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Suppliers</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if($suppliers->isEmpty())
                        <p class="text-center">Suppliers list is empty.</p>
                    @else
                    <table class="table table-striped">
                            <thead>
                              <tr>
                                <th style="width: 5%;">#</th>
                                <th style="width: 45%;">Name</th>
                                <th style="width: 50%;">Product</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($suppliers as $supplier)
                              <tr>
                                <td>{{ $supplier->id }}</td>
                                <td><a href="{{ url('suppliers/'.$supplier->id) }}">{{ $supplier->name }}</a></td>
                                <td>{{ product_title($supplier->product) }}</td>
                              </tr>
                            @endforeach
                            </tbody>
                          </table>
                    @endif
                    <div class="w-100"></div>
                    <p class="text-center">
                      <a href="{{ url("suppliers/create") }}"><button type="button" class="btn btn-lg btn-primary col-4">Create</button></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
