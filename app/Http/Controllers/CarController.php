<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index() {
        $cars = Car::all();

        // $carsCompact = compact('cars');
        // dd($carsCompact);

        return view('cars', compact('cars'));
    }

    public function show($id) {
        $car = Car::find($id);
        
        return view('car', compact('car'));
    }
}
