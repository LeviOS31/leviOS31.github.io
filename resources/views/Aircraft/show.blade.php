<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{$aircraft['name']}} | Warwiki</title>
    </head>
    <body class="w-9/12 mx-auto">
        <x-header></x-header>
        <div class="pb-16  mb-10" style="background: #D9D9D9; min-height: 65vh;">
            <x-breadcrumb></x-breadcrumb>
            <div class="mx-10 mb-5 relative">
                <h1 class="text-4xl mb-1 mt-3">{{$aircraft['name']}}</h1>
                <div class="mx-2">
                    <h2 class="text-2xl">Description</h2>
                    <div class="absolute bg-[#aaa] right-10 top-0 p-5" style="font-family: Arial, Helvetica, sans-serif">
                        <img src="{{asset('/img'.json_decode($aircraft->image)->img)}}">
                        <div class="flex justify-between mt-4">
                            <div class="flex">
                                <img src="{{asset('img/country/'.strtolower($aircraft->country)).'.png'}}" width="50px">
                                <p class="pl-2" style="font-size: 22px">{{$aircraft->country}}</p>
                            </div>
                            <div >
                                <p style="font-size: 22px">Rank {{$aircraft->rank}}</p>
                            </div>
                        </div>
                        <div class="flex justify-around mt-2 pt-2" style="border-top: 1px solid black;">
                            <p>battlerating:<br> {{json_decode($aircraft->BR)->BR}}</p>
                            <p>manufacturer:<br> {{$aircraft->manufacturer}}</p>
                            <p>Type: <br>{{$aircraft->type}}</p>
                        </div>
                    </div>
                    <p class="text-sm mx-10 mt-2" style="font-family: Arial, Helvetica, sans-serif; margin-right: 28rem">
                        {{$aircraft['Description']}}
                    </p>
                    <h2 class="text-2xl mt-3">General info</h2>
                    <hr class="mt-1 mb-2" style="height:2px;border-width:0;background-color:rgb(109, 109, 109)">
                    <h3 class="text-md" style="font-family: Arial, Helvetica, sans-serif;">Flight performance</h3>
                    <div class="border border-black flex" style="font-family: Arial, Helvetica, sans-serif;">
                        <div class="mx-4 my-2 w-1/2">
                        <p class="border-dashed border-black border-b mb-2"> Max-speed </p>
                        <div class="flex border-dashed border-black border-b m-2 mr-0 px-4 justify-between">
                            <p> {{json_decode($aircraft["general info"])->{"flight performance"}->{"max speed"}->altitude}}</p>
                            <p> {{json_decode($aircraft["general info"])->{"flight performance"}->{"max speed"}->speed}} </p>
                        </div>
                        <div class="flex border-dashed border-black border-b px-4 justify-between">
                            <p> Turn time</p>
                            <p> {{json_decode($aircraft["general info"])->{"flight performance"}->{"turn time"} }} </p>
                        </div>
                        @dump(json_decode($aircraft["general info"])->{"flight performance"})
                        </div>
                        <div class="mx-4 my-2 w-1/2">
                            <div class="flex border-dashed border-black border-b px-4 justify-between">
                                <p> Engine </p>
                                <p> {{json_decode($aircraft["general info"])->{"flight performance"}->engine->name }} </p>
                            </div>
                            <div class="flex border-dashed border-black border-b m-2 mr-0 px-4 justify-between">
                                <p> type</p>
                                <p> {{json_decode($aircraft["general info"])->{"flight performance"}->engine->type }} </p>
                            </div>
                            <div class="flex border-dashed border-black border-b m-2 mr-0 px-4 justify-between">
                                <p> Type</p>
                                <p> {{json_decode($aircraft["general info"])->{"flight performance"}->engine->type }} </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <x-footer></x-footer>
        </div>
    </body>
</html>