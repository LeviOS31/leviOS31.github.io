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
        <div class="pb-16  mb-10" style="background: #D9D9D9; min-height: 65vh;">
            <x-breadcrumb></x-breadcrumb>
            <h1 class="text-6xl pl-10 py-5">Aircraft {{$country}}</h1>
            <div class="mx-10">
                <div class="overflow-hidden transition-all duration-200 mb-4" id="expand1" style="height: 32px; background-color: #aaaaaa;">
                    <div class="flex justify-between" onclick="drop(1)" style="background-color: #888888;">
                        <h1 class="text-2xl ml-4">FIGHTERS</h1>
                        <svg version="1.1" class="w-8 mr-4" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                            <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                                c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                                s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                        </svg>
                    </div>
                    <div class="px-6">
                    @foreach ($aircrafts as $aircraft)
                        @if ($aircraft['type'] == 'Fighter')
                            <a href="{{url("/aircraft", [$country, $aircraft['name']])}}">{{$aircraft['name']}}</a>
                        @endif
                    @endforeach
                    </div>
                </div>
                <div class="overflow-hidden transition-all duration-200 mb-4" id="expand2" style="height: 32px; background-color: #aaaaaa;">
                    <div class="flex justify-between" onclick="drop(2)" style="background-color: #888888;">
                        <h1 class="text-2xl ml-4">TWIN-ENGINE FIGHTER</h1>
                        <svg version="1.1" class="w-8 mr-4" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                            <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                                c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                                s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                        </svg>
                    </div>
                    <div class="px-6">
                    @foreach ($aircrafts as $aircraft)
                        @if ($aircraft['type'] == 'twin-engine fighter')
                            <a href="{{url("/aircraft", [$country, $aircraft['name']])}}">{{$aircraft['name']}}</a>
                        @endif
                    @endforeach
                    </div>
                </div>
                <div class="overflow-hidden transition-all duration-200 mb-4" id="expand3" style="height: 32px; background-color: #aaaaaa;">
                    <div class="flex justify-between" onclick="drop(3)" style="background-color: #888888;">
                        <h1 class="text-2xl ml-4">STRIKE AIRCRAFT</h1>
                        <svg version="1.1" class="w-8 mr-4" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                            <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                                c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                                s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                        </svg>
                    </div>
                    <div class="px-6">
                    @foreach ($aircrafts as $aircraft)
                        @if ($aircraft['type'] == 'strike aircraft')
                            <a href="{{url("/aircraft", [$country, $aircraft['name']])}}">{{$aircraft['name']}}</a>
                        @endif
                    @endforeach
                    </div>
                </div>
                <div class="overflow-hidden transition-all duration-200 mb-4" id="expand4" style="height: 32px; background-color: #aaaaaa;">
                    <div class="flex justify-between" onclick="drop(4)" style="background-color: #888888;">
                        <h1 class="text-2xl ml-4">BOMBER</h1>
                        <svg version="1.1" class="w-8 mr-4" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                            <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                                c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                                s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                        </svg>
                    </div>
                    <div class="px-6">
                    @foreach ($aircrafts as $aircraft)
                        @if ($aircraft['type'] == 'Bomber')
                            <a href="{{url("/aircraft", [$country, $aircraft['name']])}}">{{$aircraft['name']}}</a>
                        @endif
                    @endforeach
                    </div>
                </div>
                <div class="overflow-hidden transition-all duration-200 mb-4" id="expand5" style="height: 32px; background-color: #aaaaaa;">
                    <div class="flex justify-between" onclick="drop(5)" style="background-color: #888888;">
                        <h1 class="text-2xl ml-4">JET FIGHTER </h1>
                        <svg version="1.1" class="w-8 mr-4" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                            <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                                c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                                s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                        </svg>
                    </div>
                    <div class="px-6">
                    @foreach ($aircrafts as $aircraft)
                        @if ($aircraft['type'] == 'JetFighter')
                            <a href="{{url("/aircraft", [$country, $aircraft['name']])}}">{{$aircraft['name']}}</a>
                        @endif
                    @endforeach
                    </div>
                </div>
                <div class="overflow-hidden transition-all duration-200 mb-4" id="expand6" style="height: 32px; background-color: #aaaaaa;">
                    <div class="flex justify-between" onclick="drop(6)" style="background-color: #888888;">
                        <h1 class="text-2xl ml-4">HELICOPTER </h1>
                        <svg version="1.1" class="w-8 mr-4" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                            <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                                c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                                s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                        </svg>
                    </div>
                    <div class="px-6">
                    @foreach ($aircrafts as $aircraft)
                        @if ($aircraft['type'] == 'Helicopter')
                            <a href="{{url("/aircraft", [$country, $aircraft['name']])}}">{{$aircraft['name']}}</a>
                        @endif
                    @endforeach
                </div>
            </div>
            <x-footer></x-footer>
        </div>
    </body>
</html>
</script>
<script>
    function drop(num){
        var x = document.getElementById("expand"+num);
        if (x.style.height == '32px') 
        {
            x.style.height = "200px";
        } 
        else 
        {
            x.style.height = "32px";
        }
    }
</script>