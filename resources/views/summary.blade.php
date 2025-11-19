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
                    
                </tr>
            @endforeach
            {{-- <tr>
                <td>{{ $summary['firstName'] }}</td>
                <td>{{ $summary['lastName'] }}</td>
                <td>{{ $summary['middleInitial'] }}</td>
                <td>{{ $summary['email'] }}</td>
                <td>{{ $summary['contact'] }}</td>
                <td>{{ $summary['college'] }}</td>
                <td>{{ $summary['program'] }}</td>
            </tr> --}}
        </tbody>
    </table>

    <a href="/register" type="submit" class="btn btn-primary">Back to registration</a>
</div>
@endsection
