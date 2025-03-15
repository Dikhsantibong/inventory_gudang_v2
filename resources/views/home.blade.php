@extends('layout.app')

@section('title', 'Home')

@include('components.navbar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="mb-4">Welcome to Our Application</h1>
            <p class="lead mb-4">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            @guest
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a>
            @else
                <a href="{{ route('dashboard') }}" class="btn btn-success btn-lg">Go to Dashboard</a>
            @endguest
        </div>
    </div>
</div>
@endsection 