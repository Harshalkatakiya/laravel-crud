@extends('products.layouts.app')

@section('body')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <div>{{ $message }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container d-flex justify-content-center">
        <div class="card mt-4 justify-content-center align-content-center" style="width: 30rem;">
            <div class="card-header bg-info">
                View Product
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" readonly="true"
                        value="{{ old('name', $products->name) }}" placeholder="Name">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" readonly="true" name="description" placeholder="Description" rows="4">{{ old('description', $products->description) }}</textarea>
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" type="file" accept="image/*" name="image" readonly="true"
                        value="{{ old('image', $products->image) }}" id="image">
                    @if ($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
