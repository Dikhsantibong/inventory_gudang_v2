@extends('layout.app')

@section('title', 'Login - Gudang Manager Pro')

@section('content')
<div class="bg-primary min-vh-100 d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <!-- Login form-->
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header justify-content-center">
                        <div class="text-center">
                            <img class="mb-3 mt-4" src="{{ asset('logo/navlogo.png') }}" alt="Logo" style="height: 50px;">
                            <h3 class="fw-light">Login to Your Account</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="small mb-1" for="email">Email Address</label>
                                <input class="form-control @error('email') is-invalid @enderror" 
                                       id="email" 
                                       type="email" 
                                       name="email"
                                       value="{{ old('email') }}" 
                                       placeholder="Enter email address"
                                       required 
                                       autocomplete="email" 
                                       autofocus />
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="small mb-1" for="password">Password</label>
                                <input class="form-control @error('password') is-invalid @enderror" 
                                       id="password" 
                                       type="password" 
                                       name="password"
                                       placeholder="Enter password"
                                       required 
                                       autocomplete="current-password" />
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Login Button -->
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button type="submit" class="btn btn-primary w-100">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small">
                            &copy; 2024 Gudang Manager Pro. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .bg-primary {
        background: linear-gradient(135deg, #0061f2 0%, rgba(105, 0, 199, 0.8) 100%) !important;
        min-height: 100vh !important;
    }
    .container {
        margin: 0 auto;
        max-width: 100%;
        padding: 0 1.5rem;
    }
    .card {
        width: 100%;
    }
    @media (max-width: 576px) {
        .container {
            padding: 0 1rem;
        }
    }
</style>
@endpush 