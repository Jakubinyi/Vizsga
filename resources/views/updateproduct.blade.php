@extends('layouts.Adcon')

@section('title','Update Products')

@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-4"><b>Update Products</b></h1>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card p-4">
        <h3 class="mb-4">Product List</h3>

        @foreach($products as $product)
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center mb-3 mb-md-0">
                            <img src="{{ url('/w/show/'.$product->id) }}" width="100" height="100" style="object-fit:cover; border-radius:10px;">
                        </div>

                        <div class="col-md-10">
                            <form action="{{ route('products.updateInfo', $product->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label class="form-label"><b>Product Name</b></label>
                                    <input type="text" name="product_name_en" class="form-control" value="{{ $product->pro_name_EN }}" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label"><b>Product Price</b></label>
                                    <input type="number" step="0.01" name="Product_Price" class="form-control" value="{{ $product->pro_price }}" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label"><b>Product Description</b></label>
                                    <textarea name="productdescription_en" class="form-control" rows="4" required>{{ $product->pro_description_EN }}</textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Update Product
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

@endsection