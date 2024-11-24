@extends('products.layouts.app')

@section('body')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <div>{{ $message }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container">
        <div class="d-flex mt-1 align-content-center justify-content-between">
            <p class="h1">Products</p>
            <a href="/products/create" class="align-content-center">
                <button type="button" class="btn btn-primary">Add Product</button>
            </a>
        </div>
        <table class="table table-primary table-striped mt-4 table-bordered border-primary table-hover">
            <thead>
                <tr class="">
                    <th scope="col">No.</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td scope="row"><img class="rounded img-fluid" style="width: 200px; height: 200px;"
                                src="{{ asset('products/' . $product->image) }}" /></td>
                        <td scope="row">{{ $product->name }}</td>
                        <td scope="row">{{ $product->description }}</td>
                        <td scope="row">
                            <a href="/products/{{ $product->id }}/show"><button type="button"
                                    class="btn btn-info btn-sm">View</button></a>
                            <a href="/products/{{ $product->id }}/edit"><button type="button"
                                    class="btn btn-secondary btn-sm">Edit</button></a>
                            <form action="/products/{{ $product->id }}/delete" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @if ($products->isEmpty())
                    <tr>
                        <td colspan="5" class="text-center">No products found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
@endsection
