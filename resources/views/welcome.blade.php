<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Localization</title>
</head>
<body>
    <h1>{{ __('messages.welcome') }}</h1>
    <p>{{ __('messages.greeting', ['name' => 'Kamran']) }}</p>

    <!-- Language switcher -->
    <a href="{{ url('lang/en') }}">English</a> |
    <a href="{{ url('lang/es') }}">Español</a>
</body>
</html>