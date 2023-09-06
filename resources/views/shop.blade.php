@extends('layouts.app') {{-- Assuming you have a master layout named 'app.blade.php' --}}

@section('content')
<div class="container">
    <h1>Welcome to Our Shop</h1>
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/400" alt="Product Image" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text"><strong>Price: ${{ $product->price }}</strong></p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

{{-- Pagination Links --}}
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection
