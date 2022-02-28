<?php

namespace App\Http\Controllers;

use App\Models\Benefactor;
use Illuminate\Http\Request;

class BenefactorController extends Controller
{
    public function getBenefactor()
    {
        return response()->json(Benefactor::all(),200);
    }

    public function getBenefactorById($id){
        $Benefactor=Benefactor::find($id);
        if(is_null($Benefactor)){
            return response()->json(['message'=>'Benefactor not found'],404);
        }
        return response()->json($Benefactor::find($id),200);
    }

    public function addBenefactor(Request $request)
    {
        $request->validate([

            "nationalId"=>"required",

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',

        ]);

        $Benefactor=Benefactor::create($request->all());
        return response($Benefactor,200);
    }

    public function updateBenefactor(Request $request,$id){
        $request->validate([
            "nationalId"=>"required",
            'name' => 'required',
            'email' => 'unique',
            'phone' => 'required',
            'address' => 'required',


        ]);
        $Benefactor=Benefactor::find($id);
        if(is_null($Benefactor)){
            return response()->json(['message'=>'Benefactor not found'],404);
        }
        $Benefactor->update($request->all());
        return response($Benefactor, 201);
    }
    public function deleteBenefactor(Request $request,$id){
        $Benefactor=Benefactor::find($id);
        if(is_null($Benefactor)){
            return response()->json(['message'=>'Benefactor not found'],404);
        }
        $Benefactor->delete();
        return response()->json(null,204);
    }
}
