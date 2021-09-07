<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <!-- Main styles for this application -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <meta id="csrf-token" name="csrf-token" value="{{ csrf_token() }}">
    <script>window.laravel = {csrfToken: '{{csrf_token()}}'}</script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div id="app"></div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
