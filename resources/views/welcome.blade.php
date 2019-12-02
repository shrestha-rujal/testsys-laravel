<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}" >
        <title>Testsys</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           body {
                font-family: 'Nunito Sans', sans-serif;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
        </style>
    </head>
    <body>
       <div id="app">            
            <!-- <dashboard /> -->
            <testcasescreen />
            <!-- <formscreen /> -->
       </div>
    <script src="/js/app.js"></script>
    </body>
</html>
