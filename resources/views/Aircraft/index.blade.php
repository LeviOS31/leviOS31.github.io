<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Aircraft | WarWiki</title>
        @vite('resources/css/app.css')
    </head>
    <body class="w-9/12 mx-auto">
        <div>
            <x-header>
            </x-header>
        </div>
        <div style="background: #D9D9D9">
            <x-breadcrumb></x-breadcrumb>
            <h1 class="text-6xl pl-10 pt-5">Aircraft</h1>
            <div class="flex flex-wrap mx-10 justify-around pb-16">
                <a class="my-4" href="{{url('/aircraft/usa')}}"><img width="250px" src="{{asset('img/country/usa.png')}}"></a>
                <a class="my-4" href="{{url('/aircraft/uk')}}"><img width="250px" src="{{asset('img/country/uk.png')}}"></a>
                <a class="my-4" href="{{url('/aircraft/germany')}}"><img width="250px" src="{{asset('img/country/germany.png')}}"></a>
                <a class="my-4" href="{{url('/aircraft/ussr')}}"><img width="250px" src="{{asset('img/country/ussr.png')}}"></a>
                <a class="my-4" href="{{url('/aircraft/japan')}}"><img width="250px" src="{{asset('img/country/japan.png')}}"></a>
                <a class="my-4" href="{{url('/aircraft/china')}}"><img width="250px" src="{{asset('img/country/china.png')}}"></a>
                <a class="my-4" href="{{url('/aircraft/italy')}}"><img width="250px" src="{{asset('img/country/italy.png')}}"></a>
                <a class="my-4" href="{{url('/aircraft/france')}}"><img width="250px" src="{{asset('img/country/france.png')}}"></a>
                <a class="my-4" href="{{url('/aircraft/sweden')}}"><img width="250px" src="{{asset('img/country/sweden.png')}}"></a>
            </div>
            <div class="flex flex-wrap mx-10 justify-around pb-16">
                <a class="my-4" href="{{url('/aircraft/fighter')}}"><img width="200px" class="rounded" style="border: 1px solid #90A4AE;" src="{{asset('img/aircraft/type/Fighter.png')}}"></a>
                <a class="my-4" href="{{url('/aircraft/twin-engine_fighter')}}"><img width="200px" class="rounded" style="border: 1px solid #90A4AE;" src="{{asset('img/aircraft/type/Twinenginefighter.png')}}"></a>
                <a class="my-4" href="{{url('/aircraft/bomber')}}"><img width="200px" class="rounded" style="border: 1px solid #90A4AE;" src="{{asset('img/aircraft/type/Bomber.png')}}"></a>
                <a class="my-4" href="{{url('/aircraft/strike_aircraft')}}"><img width="200px" class="rounded" style="border: 1px solid #90A4AE;" src="{{asset('img/aircraft/type/Attacker.png')}}"></a>
                <a class="my-4" href="{{url('/aircraft/Jet_fighter')}}"><img width="200px" class="rounded" style="border: 1px solid #90A4AE;" src="{{asset('img/aircraft/type/Jetfighter.png')}}"></a>
                <a class="my-4" href="{{url('/aircraft/Helicopter')}}"><img width="200px" class="rounded" style="border: 1px solid #90A4AE;" src="{{asset('img/aircraft/type/Helicopter.png')}}"></a>
            </div>
            <x-footer></x-footer>
        </div>
    </body>
</html>