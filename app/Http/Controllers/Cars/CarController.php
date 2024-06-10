<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __construct(){
        $this->middleware(['auth','verified']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car = new Car();
        $car->brand = $request->input('brand');
        $car->model = $request->input('model');
        $car->registration = $request->input('registration');
        $car->serial_number = $request->input('serial_number');
        $car->fiscal_power = $request->input('fiscal_power');
        $car->circulation_date = $request->input('circulation_date');
        $car->save();
        return redirect()->route('cars.index')->with('success','Car created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::find($id);
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::find($id);
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = Car::find($id);
        $car->update($request->all());
        return redirect()->route('cars.index')->with('success', 'Car updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Car deleted successfully');
    }
}
