<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>WarWiki</title>
        @vite('resources/css/app.css')
    </head>
    <body class="w-9/12 mx-auto">
        <div>
            <x-header>
            </x-header>
        </div>
        <div class="pb-16" style="background: #D9D9D9">
            <div class="flex justify-around py-10 px-10">
                <a href="{{url("/aircraft")}}" class="h-64 w-80 bg-white" style="background-image: url({{ asset('img/home/Aircraft.png') }}); background-size: cover; background-position: center;">
                    <p class="text-3xl text-center py-2" style="background-color:rgb(255, 255, 255, 0.5) ; position: relative; top:50%; margin-top:-25px;">Aircraft</p>
                </a>
                <a href="{{url("/ground")}}" class="h-64 w-80 bg-white" style="background-image: url({{ asset('img/home/groundvehicles.png') }}); background-size: cover; background-position: center;">
                    <p class="text-3xl text-center py-2" style="background-color:rgb(255, 255, 255, 0.5) ; position: relative; top:50%; margin-top:-25px;">Ground vehicles</p>
                </a>
                <a href="{{url("/fleet")}}" class="h-64 w-80 bg-white" style="background-image: url({{ asset('img/home/fleet.png') }}); background-size: cover; background-position: center;">
                    <p class="text-3xl text-center py-2" style="background-color:rgb(255, 255, 255, 0.5) ; position: relative; top:50%; margin-top:-25px;">Fleet</p>
                </a>
            </div>
            <div class="flex justify-around mt-20">
                <div class="ml-16 flex flex-col space-y-4">
                    <h1 class="text-5xl">About wiki</h1>
                    <a href="{{url("/newarticles")}}" class="font-mono text-blue-400 text-lg">Add new articles</a>
                    <a href="{{url("/addpictures")}}" class="font-mono text-blue-400 text-lg">Add pictures</a>
                    <a href="{{url("/insertvidoes")}}" class="font-mono text-blue-400 text-lg">Inserting videos</a>
                </div>
                <div class="mr-16 flex flex-col space-y-4">
                    <h1 class="text-5xl">Game mechanics</h1>
                    <a href="{{url("/ammunition")}}" class="font-mono text-blue-400 text-lg">Ammunition</a>
                    <a href="{{url("/damagemechanic")}}" class="font-mono text-blue-400 text-lg">Damage mechanics</a>
                    <a href="{{url("/modifications")}}" class="font-mono text-blue-400 text-lg">Modifications</a>
                </div>
            </div>
            <x-newarticles></x-newarticles>     
        </div>
    </body>
</html>
