
@extends('layouts.app')

@section('content')
    <h1>Статистика Пользователей</h1>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Имя</th>
                <th>Время</th>
                <th>Цена</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->usersID }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->time }}</td>
                    <td>{{ $user->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection
