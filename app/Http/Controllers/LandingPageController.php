<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rent;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cars = Car::all();
        return view('landing_page.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $selectedCarId = $request->query('id');
        $cars = Car::all();
        // $car = Car::find($id);
        // dd($cars, $car);
        return view('landing_page.create', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'destination' => 'required|string',
            'id_card_number' => 'required|integer|unique:rents,id_card_number',
            'car_id' => 'required|exists:cars,id',
            'user_id' => 'required|exists:users,id',
        ]);
        // dd($validatedData);
        Rent::create($validatedData);
        return redirect('/landing-page')->with('success', 'Pesanan Berhasil dibuat!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // $cars = Car::find($id);
        // return view('landing_page.show', compact('cars'));
        $cars = Car::find($id);
        dd($cars);
        return view('landing_page.show', compact('cars'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
