@extends('layouts.master')

@section('content_here')

<div class="d-flex justify-content-center">
    <div class="col-md-4">
       <h2 class="mb-4">Edit Student</h2>
        <div class="card">
             <div class="card-body">
                <form action="/students/{{ $student->id }}" method="POST" novalidate>
                    @csrf
                    @method('PATCH')
                    <div class="d-flex justify-content-between">
                        <div class="mb-2 me-2 w-50">
                            <label class="form-label">First Name</label>
                            <input type="text" name="first_name" value="{{ $student->first_name }}" class="form-control @error('first_name') is-invalid @enderror">
                            @error('first_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-2 w-50">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="last_name" value="{{ $student->last_name }}" class="form-control @error('last_name') is-invalid @enderror">
                            @error('last_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Middle Initial (optional)</label>
                        <input type="text" name="middle_initial" value="{{ $student->middle_initial }}" class="form-control @error('middle_initial') is-invalid @enderror">
                        @error('middle_initial')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="{{ $student->email }}" class="form-control @error('email') is-invalid @enderror">
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Contact Number</label>
                        <input type="text" name="contact" value="{{ $student->contact }}" class="form-control @error('contact') is-invalid @enderror">
                        @error('contact')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-2">
                        <div class="form-floating">
                            <select
                                class="form-select @error('college') is-invalid @enderror"
                                name="college"
                                id="floatingSelectCollege"
                                aria-label="Floating label select example">
                                <option disabled>-- Select College --</option>
                                <option value="Example1" {{ $student->college == 'Example1' ? 'selected' : '' }}>Example1</option>
                                <option value="Example2" {{ $student->college == 'Example2' ? 'selected' : '' }}>Example2</option>
                                <option value="Example3" {{ $student->college == 'Example3' ? 'selected' : '' }}>Example3</option>
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
                                <option disabled>-- Select Program --</option>
                                <option value="Information Technology" {{ $student->program == 'Information Technology' ? 'selected' : '' }}>Information Technology</option>
                                <option value="Computer Science" {{ $student->program == 'Computer Science' ? 'selected' : '' }}>Computer Science</option>
                                <option value="Information System" {{ $student->program == 'Information System' ? 'selected' : '' }}>Information System</option>
                            </select>
                            <label for="floatingSelectProgram">Program</label>
                            @error('program')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class.blade.php" class="btn btn-primary w-50">Update</button>
                        <a href="{{ route('summary') }}" class="btn btn-danger w-50">Cancel</a>
                    </div>

                </form>
            </div>
       </div>
    </div>
</div>

@endsection
