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
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $summary['firstName'] }}</td>
                <td>{{ $summary['lastName'] }}</td>
                <td>{{ $summary['middleInitial'] }}</td>
                <td>{{ $summary['email'] }}</td>
                <td>{{ $summary['contact'] }}</td>
                <td>{{ $summary['college'] }}</td>
                <td>{{ $summary['program'] }}</td>
            </tr>
        </tbody>
    </table>

    <a href="/register" type="submit" class="btn btn-primary">Back to registration</a>
</div>
@endsection
