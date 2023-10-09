@extends('layouts.website')
@section('content')
<br>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="bg-warning card-header">MY Profile</div>
                <div class="card-body">
                    <h1>Name: {{ $user->name }}</h1>
                    <h3>Email: {{ $user->email }}</h3>
                    <h4>Phone Number:{{$user->phone}}</h4>
                    <h4>Address:{{$user->address}}</h4>
                    <a  href="{{ route('profile.edit', ['profile' => $user->id]) }}" class="btn btn-warning">Edit Profile</a>
            
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<form action="{{ route('logout') }}" method="POST">
                      @csrf
                      <button   type="submit" class="btn btn-warning ml-5">Logout</button>
                    </form>
                    <br>
@endsection


