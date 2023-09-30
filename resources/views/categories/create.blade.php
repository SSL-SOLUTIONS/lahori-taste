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
    <h2>Add Category</h2>
    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-6">
            <label for="title">Item title</label>
            <input type="text" class="form-control" id="title" name="title" required value="{{old('title')}}">
        </div>
        <div class="form-group col-6">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
        </div>

       
    <div class="form-group col-6">
    <label for="image">Image</label>
    <input type="file" class="form-control" id="image" name="image" required value="{{old('image')}}">
</div>
 
        <button type="submit" class="btn btn-success">Add</button>
    </form>
</div>
@endsection
