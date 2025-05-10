<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckAgeController extends Controller
{
    public function index(){
        return view('ageform');
    }

    public function check(Request $request){
        // Validate age input
        $request->validate([
            'age' => 'required|integer|min:18',
        ]);

        return redirect()->route('vote', ['age' => $request->input('age')])
        ->with('success', 'You have successfully accessed the vote page.');
          
    }
    
}
