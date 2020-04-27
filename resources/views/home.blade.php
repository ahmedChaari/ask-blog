<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport"   content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Forum</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- Fonts -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <v-app>
        <app-home></app-home>
        </v-app>
    </div>

   
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>