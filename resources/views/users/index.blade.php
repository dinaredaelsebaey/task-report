@extends('layouts.app')

@section('content')
    <h1>User List</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
    {{ $users->links() }}
@endsection
