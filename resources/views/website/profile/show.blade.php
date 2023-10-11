@extends('layouts.website')
@section('content')
<br><br>
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
                        <i class="fas fa-user icon rounded-circle" width="150"></i>
                    @endif
                </div>
                <div class="card-body text-center">
                   <h3> <b>Name:</b> {{ $user->name }}</h3>
                    <h3><b>Email:</b>{{ $user->email }}</h3>
                    <h3><b>Contact Number:</b> {{ $user->phone }}</h3>
                    <h3><b>Address:</b>{{ $user->address }}</h3>
                    <a href="{{ route('profile.edit', ['profile' => $user->id]) }}" class="btn btn-warning">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit"
    onclick="return confirm('Are you sure you want to Logout?')" class="btn btn-warning ml-5">Logout</button>
</form>
<br>
@endsection
