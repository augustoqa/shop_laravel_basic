@extends('layouts.app')

@section('content')

    <h1>Welcome</h1>
    
    <div class="row">    
    {{-- @dump($products) --}}
    @forelse ($products as $product)
        <div class="col-3">
            @include('components.product-card')
        </div>
    @empty
        <div class="alert alert-danger">
            No products yet!
        </div>
    @endforelse
    {{-- @dump($products)
    @dd(\DB::getQueryLog()) --}}
    </div>

@endsection