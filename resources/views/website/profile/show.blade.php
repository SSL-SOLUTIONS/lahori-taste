@extends('layouts.website')

@section('content')
<br><br><br><br><br>
<div class="container">
    @if(session()->has('success'))
        <div class="col-8 alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="text-center mt-3">
                    @if($user->image)
                        <img src="{{ asset('/img/users/' . $user->image) }}" alt="Profile Image" class="rounded-circle" width="150">
                    @else
                        <!-- <img src="{{ asset('path_to_default_image.jpg') }}" alt="Default Image" class="rounded-circle" width="150"> -->
                        <i class="fas fa-user icon"></i>
                    @endif
                </div>
                <div class="card-body text-center">
                    <h3>Name: {{ $user->name }}</h3>
                    <h3>Email:  {{ $user->email }}</h3>
                    <h3>Phone Number: {{ $user->phone }}</h3>
                    <h3>Address: {{ $user->address }}</h3>
                    <a href="{{ route('profile.edit', ['profile' => $user->id]) }}" class="btn btn-warning">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-warning ml-5">Logout</button>
</form>
<br>
@endsection
