@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $edit ? 'Edit' : 'Create' }} product</div>

                <div class="card-body">
                    <form method="POST" action="{{ $edit ? url('products/'.$product->id) : url('products') }}">
                        @csrf
                        @if($edit)
                            @method('PUT')
                        @endif
                        <div class="form-group row">
                            <label for="text" class="col-sm-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $edit ? $product->title : old('title') }}"  autofocus>
                            
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>

                            <div class="col-md-6">
                                  <input id="category" type="text" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ $edit ? $product->category : old('category') }}" >
                            
                                  @if ($errors->has('category'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('category') }}</strong>
                                      </span>
                                  @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>

                            <div class="col-md-6">
                              <div class="input-group">
                                <input id="price" type="text" class="form-control text-right{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ $edit ? $product->price : old('price') }}" >
                                <div class="input-group-append">
                                  <span class="input-group-text">€</span>
                                </div>
                            
                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" >{{ $edit ? $product->description : old('description') }}</textarea>
                            
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
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
