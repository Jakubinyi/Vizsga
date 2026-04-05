@extends('layouts.Adcon')
@section('title','Admin Control')

@section('content')

<div class="container py-5">

    <h1 class="text-center mb-5 fw-bold">Admin Dashboard</h1>

    <div class="row g-4">

        <!-- Add Product -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 text-center p-3 h-100 admin-card">
                <a href="/newproduct">
                    <img src="/images/3.png" class="img-fluid mx-auto mb-3" style="width:100px;">
                </a>
                <div class="card-body">
                    <h4 class="fw-bold">Add New Product</h4>
                    <p class="text-muted">Create and add new products to your store.</p>
                    <a href="/newproduct" class="btn btn-success mt-2">Go</a>
                </div>
            </div>
        </div>

        <!-- Delete Product -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 text-center p-3 h-100 admin-card">
                <a href="/del">
                    <img src="/images/3.png" class="img-fluid mx-auto mb-3" style="width:100px;">
                </a>
                <div class="card-body">
                    <h4 class="fw-bold">Delete Product</h4>
                    <p class="text-muted">Remove products from your database.</p>
                    <a href="/del" class="btn btn-danger mt-2">Go</a>
                </div>
            </div>
        </div>

        <!-- Update Product -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 text-center p-3 h-100 admin-card">
                <a href="/editproduct">
                    <img src="/images/3.png" class="img-fluid mx-auto mb-3" style="width:100px;">
                </a>
                <div class="card-body">
                    <h4 class="fw-bold">Update Product</h4>
                    <p class="text-muted">Edit product name, price, and description.</p>
                    <a href="/editproduct" class="btn btn-primary mt-2">Go</a>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
.admin-card {
    border-radius: 20px;
    transition: all 0.3s ease;
}

.admin-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

body {
    background-color: #f4f6f9;
}
</style>

@endsection