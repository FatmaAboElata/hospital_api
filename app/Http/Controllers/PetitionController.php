<?php

namespace App\Http\Controllers;

use App\Models\Petition;
use Illuminate\Http\Request;

class PetitionController extends Controller
{

    public function index()
    {
        $petitions = Petition::all() ;
        return response()->json(['message'=>'Success' , 'data'=>$petitions]);
    }

    public function store(Request $request)
    {
        $petition = Petition::create($request->all());
         return response()->json(['message' => 'Data Inserted' , 'data'=>$petition]);
    }

    public function show(Petition $petition)
    {
        return response()->json(['message'=>'data success' , 'data'=>$petition]);
    }

    public function update(Request $request, Petition $petition)
    {
        $petition->update($request->all());
        return response()->json(['message'=>'data updated' , 'data'=>$petition]);
    }

    public function destroy(Petition $petition)
    {
        $petition->delete();
        return response()->json(['message'=>'data deleted' , 'data'=>$petition]);
    }
}
