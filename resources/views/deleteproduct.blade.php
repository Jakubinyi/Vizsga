@extends('layouts.Adcon')

@section('title','Delete Products')

@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-4"><b>Delete Products</b></h1>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="card p-4">
        <h3 class="mb-3">Product List</h3>

        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>

                        <td>
                            <img src="{{ url('/w/show/'.$product->id) }}" width="80" height="80">
                        </td>

                        <td>{{ $product->pro_name_EN }}</td>

                        <td>{{ $product->pro_price }}</td>

                        <td>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this product?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

@endsection