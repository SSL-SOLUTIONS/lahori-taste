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
    <h2>Add Menu Item</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-6">
            <label for="name">Item Name</label>
            <input type="text" class="form-control" id="name" name="name" required  value="{{old('name')}}" > 
        </div>
        <div class="form-group col-6">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
        </div>
        <div class="form-group col-6">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" required   value="{{old('price')}}">
        </div>
        <div class="form-group col-6">
            <label for="category_id">Category</label>
            <select name="category_id" id="" class="form-control">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-6">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" required   value="{{old('quantity')}}">
        </div>


        <div class="form-group col-6">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*" required  value="{{old('image')}}">
        </div>

        <button type="submit" class="btn btn-success">Add</button>
    </form>
</div>
@endsection