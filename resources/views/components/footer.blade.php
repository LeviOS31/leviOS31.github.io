<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        <div class="pl-10">
            <div class="px-2 mr-10" style="border: 1px solid black;">
                <h1 class="text-xl">Category: {{ Request::segment(1)}}</h1>
            </div>
            <div class="pt-4 pl-6 pr-14">
                <h1 class="text-3xl">Quick links</h1>
                <div class="flex justify-between" style="font-family: Arial, Helvetica, sans-serif;">
                    <div class="flex flex-col">
                        <h1 class="text-xl" style="font-family: jefferies"><a href="{{url('/aircraft')}}">Aircraft</a></h1>
                        <a class="text-sm" href="{{url('/aircraft', ['fighter'])}}">Fighter</a>
                        <a class="text-sm" href="{{url('/aircraft', ['twin-engine fighter'])}}">Twin-engine fighter</a>
                        <a class="text-sm" href="{{url('/aircraft', ['bomber'])}}">Bomber</a>
                        <a class="text-sm" href="{{url('/aircraft', ['strike aircraft'])}}">Strike aircraft</a>
                        <a class="text-sm" href="{{url('/aircraft', ['Jetfighter'])}}">Jet fighter</a>
                        <a class="text-sm" href="{{url('/aircraft', ['helicopter'])}}">Helicopter</a>
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-xl" style="font-family: jefferies"><a href="{{url('/groundvehicles')}}">Ground vehicles </a></h1>
                        <a class="text-sm" href="{{url('/groundvehicles', ['light'])}}">Light</a>
                        <a class="text-sm" href="{{url('/groundvehicles', ['medium'])}}">Medium</a>
                        <a class="text-sm" href="{{url('/groundvehicles', ['heavy'])}}">Heavy</a>
                        <a class="text-sm" href="{{url('/groundvehicles', ['spg'])}}">SPG</a>
                        <a class="text-sm" href="{{url('/groundvehicles', ['spaa'])}}">SPAA</a>
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-xl" style="font-family: jefferies"><a href="{{url('/fleet')}}">Fleet</a></h1>
                        <a class="text-sm" href="{{url('/fleet', ['barge'])}}">Barge</a>
                        <a class="text-sm" href="{{url('/fleet', ['boat'])}}">Boats</a>
                        <a class="text-sm" href="{{url('/fleet', ['destroyer'])}}">Destroyer</a>
                        <a class="text-sm" href="{{url('/fleet', ['cruiser'])}}">Cruiser</a>
                        <a class="text-sm" href="{{url('/fleet', ['subchaser'])}}">Sub-chaser</a>
                        <a class="text-sm" href="{{url('/fleet', ['battleship'])}}">Battleship</a>
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-xl" style="font-family: jefferies"><a href="{{url('/about')}}">About wiki</a></h1>
                        <a class="text-sm" href="{{url('/about/addarticle')}}">Add articles</a>
                        <a class="text-sm" href="{{url('/about/addimage')}}">Add images</a>
                        <a class="text-sm" href="{{url('/about/addvideo')}}">Insert videos</a>
                        <a class="text-sm" href="{{url('/about/templates')}}">Using templates</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>