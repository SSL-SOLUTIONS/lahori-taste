@extends('admin')

@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h2>Edit Menu Item</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group col-6">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>
        <div class="form-group col-6">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
        </div>
        <div class="form-group col-6">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{ $product->price }}" required>
        </div>
        <div class="form-group col-6">
            <label for="category">Category</label>
            <select name="category_id" id="" class="form-control">
                <option value="disable selected">Select Category</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}" {{$category->id == $product->category->id ? 'selected' : ''}}>{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-6">
            <label for="category">Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
        </div>
        <div class="form-group col-6">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection