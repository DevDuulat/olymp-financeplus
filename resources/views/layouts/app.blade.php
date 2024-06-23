<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


</head>
    <body>
    @include('includes.header')
        <main class="main container">
            @yield('content')
        </main>
    @include('includes.footer')

    <script defer type="text/javascript" src="https://changenow.io/embeds/exchange-widget/v2/stepper-connector.js"></script>
    </body>
</html>
