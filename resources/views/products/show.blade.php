@extends('layouts.app')

@section('content')

	<h1>{{ $product->title }} ({{ $product->id }})</h1>
	<p>{{ $product->description }}</p>

	{{-- comentario --}}
	@{{ var }}

@endsection