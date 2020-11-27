<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="//unpkg.com/leaflet/dist/leaflet.css" />
</head>
<body>
    <div id="app">
        <marker-component></marker-component>
    </div>
<!-- <script src="{{ secure_asset('js/app.js')}}"></script> -->
<script src="{{ asset('js/app.js')}}"></script>
</body>
</html>