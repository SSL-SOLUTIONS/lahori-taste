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
    <h2>Create User</h2>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group col-6">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group col-6">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group col-6">
            <label for="phone">Phone</label>
            <input type="phone" name="phone" class="form-control" required>
        </div>
        <div class="form-group col-6">
            <label for="address">Address</label>
            <input type="address" name="address" class="form-control" required>
        </div>
       
        <div class="form-group col-6">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection