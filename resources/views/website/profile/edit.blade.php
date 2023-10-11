@extends('layouts.website')

@section('content')
<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="bg-warning card-header">Profile</div>
                <div class="card-body text-center">
                    @if($user->image)
                        <img src="{{ asset('/img/users/' . $user->image) }}" alt="Profile Image" class="rounded-circle" width="150">
                    @else
                        <!-- <img src="{{ asset('path_to_default_image.jpg') }}" alt="Default Image" class="rounded-circle" width="150"> -->
                        <i class="fas fa-user icon"></i>
                    @endif
                    <h3>Name: {{ $user->name }}</h3>
                    <h3>Email:  {{ $user->email }}</h3>
                    <h3>Phone Number: {{ $user->phone }}</h3>
                    <h3>Address: {{ $user->address }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="bg-warning card-header">Edit Profile</div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('profile.update', ['profile' => $user->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" value="{{ $user->name }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="{{ $user->email }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" id="phone" name="phone" value="{{ $user->phone }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" value="{{ $user->address }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="image">Profile Image</label>
                            <input type="file" id="image" name="image" class="form-control-file">
                        </div>

                        <button type="submit" class="btn btn-warning">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

@endsection
