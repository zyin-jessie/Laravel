@extends('layouts.master')


@section('content_here')
   <div class="container mt-5">
    <h2 class="mb-4">Summary</h2>
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Initial</th>
                <th>Email</th>
                <th>Contact</th>
                <th>College</th>
                <th>Program</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($summary as $student)
                <tr>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->middle_initial }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->contact }}</td>
                    <td>{{ $student->college }}</td>
                    <td>{{ $student->program }}</td>
                    <td>
                        <div class="d-flex">
                            <form action="/students/{{ $student->id }}" method="POST" class="me-2">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2-icon lucide-trash-2">
                                        <path d="M10 11v6"/>
                                        <path d="M14 11v6"/>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/>
                                        <path d="M3 6h18"/>
                                        <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                                    </svg>
                                </button>
                            </form>
                            <a href="/students/{{ $student->id }}/edit" class="btn btn-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen">
                                    <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                    <path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z"/>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/register" type="submit" class="btn btn-primary">Back to registration</a>
</div>
@endsection
