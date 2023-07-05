<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.head')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
@if (!Route::is(['error-404', 'error-500']))

    <body>
@endif
@if (Route::is(['error-404', 'error-500']))

    <body class="error-page">
@endif
@if (Route::is(['forgetpassword', 'resetpassword', 'login', 'register']))

    <body class="account-page">
@endif
@include('layouts.partials.loader')
<!-- Main Wrapper -->
<div class="main-wrapper">
    @if (!Route::is(['error-404', 'error-500', 'forgetpassword', 'resetpassword', 'login', 'register']))
        @include('layouts.partials.header')
    @endif
    @if (!Route::is(['error-404', 'error-500', 'forgetpassword', 'pos', 'resetpassword', 'login', 'register']))
        @include('layouts.partials.sidebar')
    @endif
    @yield('content')
</div>
<!-- /Main Wrapper -->
@include('layouts.partials.footer-scripts')
</body>

</html>
