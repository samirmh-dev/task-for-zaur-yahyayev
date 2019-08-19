<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;
use App\Hotel;
use App\Http\Requests\FlightSearchValidate;
use App\Http\Requests\HotelSearchValidate;

class FrontController extends Controller
{
    public function index()
    {
    	$validatedHotelFields = ['city', 'check-in', 'check-out', 'rooms'];
    	return view('front/index', compact('validatedHotelFields'));
    }

    public function getFlights($request)
    {
        $query = Flight::where('departure', 'like', '%' . $request->from . '%')
            ->where('destination', 'like', '%' . $request->to . '%')
            ->where('arrival_date', $request->departure)
            ->where('adult', '>=', $request->adult);

        if ($request->return) $query->where('return_date', $request->return);

        $flights = $query->paginate(4);
        $flights->withPath('flight-pagination');
        $flightCount = $flights->total();
        $first = $flights->first();

        $filter = array(
            'from' => $request->from,
            'to' => $request->to,
            'departure' => $request->departure,
            'adult' => $request->adult
        );

        if ($request->return) $filter['return'] = $request->return;

        return view('front/flight-result', compact('flights', 'flightCount', 'first', 'filter'));
    }

    public function getHotels($request)
    {
        $query = Hotel::where('city', 'like', '%' . $request->city . '%');

        $hotels = $query->paginate(3);
        $hotels->withPath('hotel-pagination');
        $hotelCount = $hotels->total();
        $first = $hotels->first();

        $filter = array(
            'city' => $request->city
        );

        return view('front/hotel-result', compact('hotels', 'hotelCount', 'first', 'filter'));
    }

    public function searchFlights(FlightSearchValidate $request)
    {
        return $this->getFlights($request);
    }

    public function paginateFlights(Request $request)
    {
        return $this->getFlights($request);
    }

    public function searchHotels(HotelSearchValidate $request)
    {
    	return $this->getHotels($request);
    }

     public function paginateHotels(Request $request)
    {
        return $this->getHotels($request);
    }
}
