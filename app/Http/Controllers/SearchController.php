<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
       
        $search = $request->input('search');
  
        $posts = Vehicle::query()
                    ->where('vehicleNumber', 'LIKE', "%{$search}%")->get();
        
        return view('search', compact('posts'));
    }
}
