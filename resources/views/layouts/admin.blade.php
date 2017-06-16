<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    @yield('head')
</head>
<body>
    <div id="app">
        @include('web.partials.nav')
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <div class="card userNav">
                        <a href='{{ route("adminDashboard") }}' class="list-group-item">Dashboard</a>
                        <a href='#' class="list-group-item">Users</a>
                        <a href='{{ route("adminCategories") }}' class="list-group-item">Categories</a>
                        <a href='#' class="list-group-item">Classifieds</a>
                        <a href='#' class="list-group-item">Change Password</a>
                        <a href='{{ route("logout") }}' class="list-group-item">Logout</a>
                    </div>
                </div>
                <div class="col-sm-8 col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>