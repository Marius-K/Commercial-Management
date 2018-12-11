@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $edit ? 'Edit' : 'Create' }} supplier</div>

                <div class="card-body">
                    <form method="POST" action="{{ $edit ? url('suppliers/'.$supplier->id) : url('suppliers') }}">
                        @csrf
                        @if($edit)
                            @method('PUT')
                        @endif
                        <div class="form-group row">
                            <label for="text" class="col-sm-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $edit ? $supplier->name : old('name') }}"  autofocus>
                            
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product" class="col-md-4 col-form-label text-md-right">Product</label>

                            <div class="col-md-6">
                                  <select id="product" class="form-control{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product">
                                    <option {{ $edit ? 'selected ' : ''}}hidden>Select the product</option>
                                    @foreach($products as $product)
                                    <option value="{{ $product->id }}"{{ $edit == true && ($product->id == $supplier->product) ? ' selected' : '' }}>{{ $product->title }}</option>
                                    @endforeach
                                  </select>
                                  @if ($errors->has('product'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('product') }}</strong>
                                      </span>
                                  @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
