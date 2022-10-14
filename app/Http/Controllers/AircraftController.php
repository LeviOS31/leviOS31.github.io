<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use Illuminate\Http\Request;

class AircraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Aircraft.index');	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function countryortype($parm) 
    {
        $result = Aircraft::Where('country', '=', $parm)->get();
        if (!$result->isEmpty()) 
        {
            return view('Aircraft.country',[ 'aircrafts' => $result, 'country' => $parm]);
        }
        else 
        {
            $result = Aircraft::Where('type', '=', $parm)->get();
            if (!$result->IsEmpty())
            {
                return view('Aircraft.type',[ 'aircrafts' => $result, 'type' => $parm]);
            } else {
                abort(404);
            }
        }
    }

    public function show($parm, $name)
    {
        $result = Aircraft::Where('name', '=', $name)->FirstorFail();
        if ($result) 
        {
            $img = $result->image;
            return view('Aircraft.show',[ 'aircraft' => $result]);
        }
        else 
        {
            abort(404);
        }
    }
}
