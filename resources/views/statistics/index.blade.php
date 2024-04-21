@extends('layouts.app')

@section('content')
    <h1>User Task Statistics</h1>
    <ul>
        @foreach ($statistics as $statistic)
            <li>{{ $statistic->user->name }}: {{ $statistic->task_count }}</li>
        @endforeach
    </ul>
@endsection