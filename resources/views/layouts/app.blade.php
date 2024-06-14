<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite('resources/css/app.css')


</head>
<body class="bg-slate-50">
@include('includes.header')

<main class="container mx-auto py-8 px-4 ">
    @yield('content')
</main>

@include('includes.footer')
<script defer type='text/javascript' src='https://changenow.io/embeds/exchange-widget/v2/stepper-connector.js'></script>
</body>
</html>
