@extends('layouts.master')

@section('content_here')

<div class="d-flex justify-content-center">
    <div class="col-md-4">
       <h2 class="mb-4">Register</h2>
        <div class="card">
             <div class="card-body">
                <form action="{{ route('register.submit') }}" method="POST" novalidate>
                    @csrf
                    <div class="d-flex justify-content-between">
                        <div class="mb-2 me-2 w-50">
                            <label class="form-label">First Name</label>
                            <input type="text" name="firstName" value="{{ old('firstName') }}" class="form-control @error('firstName') is-invalid @enderror">
                            @error('firstName')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-2 w-50">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="lastName" value="{{ old('lastName') }}" class="form-control @error('lastName') is-invalid @enderror">
                            @error('lastName')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Middle Initial (optional)</label>
                        <input type="text" name="middleInitial" value="{{ old('middleInitial') }}" class="form-control @error('middleInitial') is-invalid @enderror">
                        @error('middleInitial')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror">
                        @error('password')<div class="invalid-feedback text-xs">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="confirm_password" value="{{ old('confirm_password') }}" class="form-control @error('confirm_password') is-invalid @enderror">
                        @error('confirm_password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Contact Number</label>
                        <input type="text" name="contact" value="{{ old('contact') }}" class="form-control @error('contact') is-invalid @enderror">
                        @error('contact')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-2">
                        <div class="form-floating">
                            <select
                                class="form-select @error('college') is-invalid @enderror"
                                name="college"
                                id="floatingSelectCollege"
                                aria-label="Floating label select example">
                                <option disabled {{ old('college') ? '' : 'selected' }}>-- Select College --</option>
                                <option value="Example1" {{ old('college') == 'Example1' ? 'selected' : '' }}>Example1</option>
                                <option value="Example2" {{ old('college') == 'Example2' ? 'selected' : '' }}>Example2</option>
                                <option value="Example3" {{ old('college') == 'Example3' ? 'selected' : '' }}>Example3</option>
                            </select>
                            <label for="floatingSelectCollege">College</label>
                            @error('college')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div class="form-floating">
                            <select
                                class="form-select @error('program') is-invalid @enderror"
                                name="program"
                                id="floatingSelectProgram"
                                aria-label="Floating label select example">
                                <option disabled {{ old('program') ? '' : 'selected' }}>-- Select Program --</option>
                                <option value="Information Technology" {{ old('program') == 'Information Technology' ? 'selected' : '' }}>Information Technology</option>
                                <option value="Computer Science" {{ old('program') == 'Computer Science' ? 'selected' : '' }}>Computer Science</option>
                                <option value="Information System" {{ old('program') == 'Information System' ? 'selected' : '' }}>Information System</option>
                            </select>
                            <label for="floatingSelectProgram">Program</label>
                            @error('program')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary w-50">Submit</button>
                        <button type="reset" class="btn btn-danger w-50">Reset</button>
                    </div>

                </form>
            </div>
       </div>
    </div>
</div>

@endsection
