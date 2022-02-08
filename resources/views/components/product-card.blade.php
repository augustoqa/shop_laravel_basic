<div class="card">
	<img
		src="{{ asset($product->images->first()->path) }}"
		alt="{{ $product->title }}"
		class="card-img-top" height="500"
	>
	<div class="card-body">
		<h4 class="text-right"><strong>${{ $product->price }}</strong></h4>
		<h5 class="card-title">{{ $product->title }}</h5>
		<p class="card-text">{{ $product->description }}</p>
		<p class="card-text"><strong>{{ $product->stock }} left</strong></p>
        @if (isset($cart))
        <p class="card-text">
            {{ $product->pivot->quantity }} in your cart
            <strong>(${{ $product->total }})</strong>
        </p>
        <form
            method="POST"
            action="{{ route('products.carts.destroy', ['cart' => $cart->id, 'product' => $product->id]) }}"
            class="d-inline"
        >
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning">Remove From Cart</button>
        </form>
        @else
        <form
            method="POST"
            action="{{ route('products.carts.store', ['product' => $product->id]) }}"
            class="d-inline"
        >
            @csrf
            <button type="submit" class="btn btn-success">Add To Cart</button>
        </form>
        @endif
    </div>
</div>
