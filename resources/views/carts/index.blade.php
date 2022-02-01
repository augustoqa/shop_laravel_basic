@extends('layouts.app')

@section('content')

    <h1>Your cart</h1>

    <div class="row">
        @forelse ($cart->products as $product)
            <div class="col-3">
                @include('components.product-card')
            </div>
        @empty
            <div class="alert alert-warning">
                Your cart is empty.
            </div>
        @endforelse
    </div>

@endsection
