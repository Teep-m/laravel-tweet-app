<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, user-scalable=no,
                maximum-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
    <title>{{ $title ?? 'つぶやきアプリ' }}</title>
    @stack('css')
</head>

<body class="bg-gray-50">
    {{ $slot }}
</body>

</html>
