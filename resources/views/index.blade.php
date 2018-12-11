@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ config('app.name', 'Commercial Management') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello, {{ Auth::user()->name }}! 
                    This application manages products, suppliers, stocks, sales, revenues and expenses. Also, it generates reports on the inputs and outputs of products, revenues and expenses.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
