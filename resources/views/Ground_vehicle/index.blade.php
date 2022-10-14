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
        <div class="pb-16" style="background: #D9D9D9">
            <x-breadcrumb></x-breadcrumb>
            <h1 class="text-6xl pl-10 pt-5">Ground vehicles</h1>
            <div class="flex flex-wrap mx-10 justify-around">
                <a class="py-4" href="{{url('/aircraft/usa')}}"><img width="250px" src="{{asset('img/country/usa.png')}}"></a>
                <a class="py-4" href="{{url('/aircraft/uk')}}"><img width="250px" src="{{asset('img/country/uk.png')}}"></a>
                <a class="py-4" href="{{url('/aircraft/germany')}}"><img width="250px" src="{{asset('img/country/germany.png')}}"></a>
                <a class="py-4" href="{{url('/aircraft/ussr')}}"><img width="250px" src="{{asset('img/country/ussr.png')}}"></a>
                <a class="py-4" href="{{url('/aircraft/japan')}}"><img width="250px" src="{{asset('img/country/japan.png')}}"></a>
                <a class="py-4" href="{{url('/aircraft/china')}}"><img width="250px" src="{{asset('img/country/china.png')}}"></a>
                <a class="py-4" href="{{url('/aircraft/italy')}}"><img width="250px" src="{{asset('img/country/italy.png')}}"></a>
                <a class="py-4" href="{{url('/aircraft/france')}}"><img width="250px" src="{{asset('img/country/france.png')}}"></a>
                <a class="py-4" href="{{url('/aircraft/sweden')}}"><img width="250px" src="{{asset('img/country/sweden.png')}}"></a>
            </div>
        </div>
    </body>
</html>