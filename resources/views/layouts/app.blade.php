<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* Define your CSS styles here */
    </style>
</head>
<body>
    <header>
        <!-- Include your header/navigation bar here -->
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('tasks.index') }}">Tasks</a></li>
                <li><a href="{{ route('statistics.index') }}">Statistics</a></li>
                <li><a href="{{ route('users.index') }}">Users</a></li>
                <!-- Add other navigation links as needed -->
            </ul>
        </nav>
    </header>

    <main>
        <!-- Content section -->
        @yield('content')
    </main>

    <footer>
        <!-- Include your footer here -->
        <p>&copy; {{ date('Y') }} Your App Name. All rights reserved.</p>
    </footer>
</body>
</html>
