@extends('layouts.master')

@section('content_here')

<div class="row mt-5 justify-content-center">
    <div class="col-md-4">
       <h2 class="mb-4">Login</h2>
        {{-- @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif --}}
        <div class="card">
             <div class="card-body">
                <form action="{{route('login.submit')}}" method="POST" novalidate>
                    @csrf
                    <div class="mb-2">
                        <label for="" class="form-label">User Name</label>
                        <input type="text" value="{{old('name')}}" name="name" class="form-control">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <div class="mb-2">
                        <label for="" class="form-label">User Email</label>
                        <input type="email" value="{{old('email')}}" name="email" class="form-control">
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <div class="mb-2">
                        <label for="" class="form-label">User Password</label>
                        <input type="password" value="{{old('password')}}" name="password" class="form-control">
                    </div>
                    @error('password')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
       </div>
    </div>
</div>
@endsection
