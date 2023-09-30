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
    <h2>Edit Category</h2>
    <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group col-6">
            <label for="title">Category Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $category->title }}" required>
        </div>
        <div class="form-group col-6">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $category->description }}</textarea>
        </div>

        <div class="form-group col-6">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" >
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
