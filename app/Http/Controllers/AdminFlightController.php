<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;
use App\Http\Requests\FlightValidate;

class AdminFlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $flights = Flight::all();
        $title = 'Flights list';

        return view('admin/flight/index', compact('flights', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add new flight';
        return view('admin/flight/create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FlightValidate $request)
    {
        $validated = $request->validated();

        $validated['arrival_time'] = date("H:i:s", strtotime($validated['arrival_time']));

        Flight::create($validated);

        return redirect('admin/flight');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flight = Flight::findOrFail($id);
        $title = 'Edit flight';

        return view('admin/flight/edit', compact('flight', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FlightValidate $request, Flight $flight)
    {
        $validated = $request->validated();

        $validated['arrival_time'] = date("H:i:s", strtotime($validated['arrival_time']));

        $flight->update($validated);

        return redirect('admin/flight');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Flight::destroy($id);

        return redirect('admin/flight');
    }
}
