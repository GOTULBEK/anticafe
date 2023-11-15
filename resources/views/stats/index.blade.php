
@extends('layouts.app')

@section('content')
    <h1>User Statistics</h1>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Time</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->userID }}</td>
                    <td>{{ $user->Name }}</td>
                    <td>{{ $user->Time }}</td>
                    <td>{{ $user->Price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
