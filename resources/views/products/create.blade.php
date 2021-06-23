@extends('layouts.master')

@section('content')
	<h1>Create a product</h1>

	<form action="{{ route('products.store') }}" method="post">
		@csrf
		<div class="form-row">
			<label>Title</label>
			<input class="form-control" type="text" name="title">
		</div>
		<div class="form-row">
			<label>Description</label>
			<input class="form-control" type="text" name="description">
		</div>
		<div class="form-row">
			<label>Price</label>
			<input class="form-control" type="number" name="price" min="1.00" step="0.01">
		</div>
		<div class="form-row">
			<label>Stock</label>
			<input class="form-control" type="number" name="stock" min="0">
		</div>
		<div class="form-row">
			<label>Status</label>
			<select name="status" class="custom-select">
				<option value="" selected>Select...</option>
				<option value="available">Available</option>
				<option value="unavailable">Unavailable</option>
			</select>
		</div>
		<div class="form-row">
			<button type="submit" class="btn btn-primary btn-lg">Create Product</button>
		</div>
	</form>
@endsection