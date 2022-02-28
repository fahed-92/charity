<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    public function getBeneficiary()
    {
        return response()->json(Beneficiary::all(),200);
    }

    public function getBeneficiaryById($id){
        $Beneficiary=Beneficiary::find($id);
        if(is_null($Beneficiary)){
            return response()->json(['message'=>'Beneficiary not found'],404);
        }
        return response()->json($Beneficiary::find($id),200);
    }

    public function addBeneficiary(Request $request)
    {
        $request->validate([

            "nationalId"=>"required",
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',

        ]);

        $Beneficiary=Beneficiary::create($request->all());
        return response($Beneficiary,200);
    }

    public function updateBeneficiary(Request $request,$id){
        $request->validate([
            "nationalId"=>"required",
            'name' => 'required',

            'phone' => 'required',
            'address' => 'required',


        ]);
        $Beneficiary=Beneficiary::find($id);
        if(is_null($Beneficiary)){
            return response()->json(['message'=>'Benefactor not found'],404);
        }
        $Beneficiary->update($request->all());
        return response($Beneficiary, 201);
    }
    public function deleteBeneficiary(Request $request,$id){
        $Beneficiary=Beneficiary::find($id);
        if(is_null($Beneficiary)){
            return response()->json(['message'=>'Beneficiary not found'],404);
        }
        $Beneficiary->delete();
        return response()->json(null,204);
    }
}
