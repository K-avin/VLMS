<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller

{public function addView()
    {
        $vehicle = Vehicle::all()->count();
        return view('dashboard', compact('vehicle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'vehicleNumber' => 'required|unique:vehicles,vehicleNumber',
            'staus' => 'required'
          ]);

          $vehicle =new Vehicle;
          $vehicle->vehiclePosition = $request->vehiclePosition;
          $vehicle->vehicleNumber = $request->vehicleNumber;
          $vehicle->staus = $request->staus;
          $vehicle->save();

        return back()->with('status', 'Vehicle has successfully add!');
    }

    public function updateView($id)
    {
        $vehicle = Vehicle::find($id);
        return view('editVehicle', compact('vehicle'));
    }

    public function update(Request $request, $id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->vehicleNumber = $request->vehicleNumber;
        $vehicle->staus = $request->staus;
        $vehicle->update();
        return redirect()->back()->with('status','Vehicle has Updated Successfully');
    }

    public function changeStatus(Request $request)
    {
        $fuelStatus = Vehicle::find($request->id);
        $fuelStatus->fuelStatus = $request->status;
        $fuelStatus->save();
  
        $vehicles = DB::table('vehicles')->paginate(20);
        return (compact('vehicles'));
        // return view('pages.home', compact('vehicles','count'));
    }

    public function deleteAll(Request $request)
    {
        DB::table('vehicles')->truncate();

       return redirect()->back()->with('status','All Vehicles has Deleted Successfully');
    }
}