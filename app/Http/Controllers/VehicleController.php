<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'vehicleNumber' => 'required',
            'staus' => 'required'
          ]);

          $vehicle =new Vehicle;
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
}