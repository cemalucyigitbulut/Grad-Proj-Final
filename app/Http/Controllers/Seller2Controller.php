<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Seller2Controller extends Controller
{



    public function create() {
        return view('Seller2');
      }

      public function store(Request $request) {
        $user = Auth::user();
        // validate form input
        $this->validate($request, [

            'price' => 'required',
            'address' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'category' => 'required',
            //'subcategory' => 'required'
        ]);

        $image = $request->file('image')->store('public/files');


        Property::create([
          'user_id' => $user->id,
          'price' => $request->price,
          'address' => $request->address,
          'bedrooms' => $request->bedrooms,
          'bathrooms' => $request->bathrooms,
          'image' => $image,
          'category_id' => $request->category,
          //'subcategory_id' => $request->subcategory
        ]);

        return redirect()->back()->with('message', 'Property created successfully');
      }


    public function index() {
        $properties = Property::paginate(4);
        return view('index', compact('properties'));
    }
}
