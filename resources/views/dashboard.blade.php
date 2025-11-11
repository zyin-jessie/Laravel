@extends('layouts.master')


@section('content_here')
   <div class="container mt-5">
    <h2 class="mb-4">Accounts</h2>
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr><th>Username</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $accounts['name'] }}</td>
                <td>{{ $accounts['email'] }}</td>
                <td>{{ $accounts['password'] }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
