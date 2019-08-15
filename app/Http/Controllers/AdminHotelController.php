<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Http\Requests\HotelValidate;

class AdminHotelController extends Controller
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
        $hotels = Hotel::all();
        $title = 'Hotels list';

        return view('admin/hotel/index', compact('hotels', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add new hotel';
        return view('admin/hotel/create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelValidate $request)
    {
        $created = Hotel::create($request->all());

        if ($request->has('document')) {
            $imageNames = [];
            foreach ($request->document as $file) {
                $imageNames[] = ['name' => $file];
            }

            $created->images()->createMany($imageNames);
        }
       
        return redirect('admin/hotel');
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
        $hotel = Hotel::findOrFail($id);
        $title = 'Edit hotel';

        return view('admin/hotel/edit', compact('hotel', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HotelValidate $request, Hotel $hotel)
    {
        $hotel->update($request->all());

        if ($request->has('document')) {
            $imageNames = [];
            foreach ($request->document as $file) {
                $imageNames[] = ['name' => $file];
            }

            $hotel->images()->delete();
            $hotel->images()->createMany($imageNames);
        }

        return redirect('admin/hotel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->images()->delete();
        $hotel->delete();

        return redirect('admin/hotel');
    }
}
