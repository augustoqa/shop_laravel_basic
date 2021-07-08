@extends('layouts.app')

@section('content')

    <h1>Welcome</h1>
    
    <div class="row">    
    @forelse ($products as $product)
        <div class="col-3">
            @include('components.product-card')
        </div>
    @empty
        <div class="alert alert-danger">
            No products yet!
        </div>
    @endforelse
    </div>

@endsection