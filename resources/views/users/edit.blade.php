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
    <h2>Edit User</h2>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group col-6">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <div class="form-group col-6">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <div class="form-group col-6">
            <label for="phone">Phone</label>
            <input type="phone" name="phone" class="form-control" value="{{ $user->phone }}" required>
        </div>

        <div class="form-group col-6">
            <label for="address">Address</label>
            <input type="address" name="address" class="form-control" value="{{ $user->address }}" required>
        </div>
        <div class="form-group col-6">
            <label for="password">Password (leave empty to keep current)</label>
            <input type="password" name="password" class="form-control">
        </div>
      

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection