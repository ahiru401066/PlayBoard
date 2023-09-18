<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>BoardGame</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.cm/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
            map
        </x-slot>
        <body>
            <h1>Board Game</h1>
            <input id="pac-input" class="controls" type="text" placeholder="Search Box"/>
            <div id="map" style="width:800px; height:800px; margin: auto"></div>
        </body>
    </x-app-layout>
</html>