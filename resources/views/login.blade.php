@extends('layouts.master')

@section('content_here')

<div class="d-flex mt-5 justify-content-center">
    <div class="col-md-4">
       <h2 class="mb-4">Login</h2>
        {{-- @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif --}}
        <div class="card">
             <div class="card-body">
                <form action="{{ route('login.submit') }}" method="POST" novalidate>
                    @csrf
                    <div class="mb-2">
                        <label for="" class="form-label">Email</label>
                        <input type="email" value="{{old('email')}}" name="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-2">
                        <label for="" class="form-label">Password</label>
                        <input type="password" value="{{old('password')}}" name="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Submit</button>

                    <p class="text-center mt-2 mb-0">Don't have an account? <a href="/register">Signup</a></p>

                </form>
            </div>
       </div>
    </div>
</div>
@endsection
