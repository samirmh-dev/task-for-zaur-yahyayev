<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlightSearchValidate;
use App\Http\Requests\HotelSearchValidate;

class FrontController extends Controller
{
    public function index()
    {
    	$validatedHotelFields = ['city', 'check-in', 'check-out', 'rooms'];
    	return view('front/index', compact('validatedHotelFields'));
    }

    public function searchFlights(FlightSearchValidate $request)
    {
    	//dd($request->all());
    	return view('front/flight-result');
    }

    public function searchHotels(HotelSearchValidate $request)
    {
    	dd($request->all());
    }
}
