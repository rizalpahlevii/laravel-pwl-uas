@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Edit Product
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <form action="{{ route('products.update',$product->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="name" placeholder="Name of product"
                                            value="{{ $product->name }}">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror"
                                            name="price" id="price" placeholder="Price of product"
                                            value="{{ $product->price }}">
                                        @error('price')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <input type="text" class="form-control @error('category') is-invalid @enderror"
                                            name="category" id="category" placeholder="Category of product"
                                            value="{{ $product->category }}">
                                        @error('category')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brand">Brand</label>
                                        <input type="text" class="form-control @error('brand') is-invalid @enderror"
                                            name="brand" id="brand" placeholder="Brand of product"
                                            value="{{ $product->brand }}">
                                        @error('brand')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" id="description" cols="30" rows="5"
                                            class="form-control @error('description') is-invalid @enderror"
                                            placeholder="Description">{{ $product->description }}</textarea>
                                        @error('description')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-sm btn-success">Save</button>
                                    <a href="{{ route('products.index') }}" class="btn btn-sm btn-secondary">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
