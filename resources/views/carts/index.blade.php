@extends('layouts.app')

@section('content')

    <h1>Your cart</h1>

    @if(!isset($cart) || $cart->products->isEmpty())
        <div class="alert alert-warning">
            Your cart is empty.
        </div>
    @else
        <h4 class="text-center">Your cart total <strong>${{ $cart->total }}</strong></h4>
        <a href="{{ route('orders.create') }}" class="btn btn-success mb-3">
            Start Order
        </a>
        <div class="row">
            @foreach ($cart->products as $product)
                <div class="col-3">
                    @include('components.product-card')
                </div>
            @endforeach
        </div>
    @endempty

@endsection
