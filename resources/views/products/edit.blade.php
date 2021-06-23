@extends('layouts.master')

@section('content')
	<h1>Create a product</h1>

	<form action="{{ route('products.update', ['product' => $product->id]) }}" method="post">
		@csrf
		@method('PUT')
		<div class="form-row">
			<label>Title</label>
			<input class="form-control" type="text" name="title" value="{{ $product->title }}">
		</div>
		<div class="form-row">
			<label>Description</label>
			<input class="form-control" type="text" name="description" value="{{ $product->description }}">
		</div>
		<div class="form-row">
			<label>Price</label>
			<input class="form-control" type="number" name="price" value="{{ $product->price }}" min="1.00" step="0.01">
		</div>
		<div class="form-row">
			<label>Stock</label>
			<input class="form-control" type="number" name="stock" value="{{ $product->stock }}" min="0">
		</div>
		<div class="form-row">
			<label>Status</label>
			<select name="status" class="custom-select">
				<option value="" selected>Select...</option>
				<option value="available" {{ $product->status == 'available' ? 'selected' : '' }}>Available</option>
				<option value="unavailable" {{ $product->status == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
			</select>
		</div>
		<div class="form-row">
			<button type="submit" class="btn btn-primary btn-lg">Edit Product</button>
		</div>
	</form>
@endsection