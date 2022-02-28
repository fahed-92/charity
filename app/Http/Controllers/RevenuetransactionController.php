<?php

namespace App\Http\Controllers;

use App\Models\Revenuetransaction;
use Illuminate\Http\Request;

class RevenuetransactionController extends Controller
{
    public function getRevenuetransaction()
    {
        return response()->json(Revenuetransaction::all(),200);
    }

    public function getRevenuetransactionById($id){
        $Revenuetransaction=Revenuetransaction::find($id);
        if(is_null($Revenuetransaction)){
            return response()->json(['message'=>'Revenuetransaction not found'],404);
        }
        return response()->json($Revenuetransaction::find($id),200);
    }

    public function addRevenuetransaction(Request $request)
    {
        $request->validate([
            'transactionNumber'=>'required',
            "benefactors_id"=>"required",
            'date' => 'required','date',
            'value' => 'required',


        ]);

        $Revenuetransaction=Revenuetransaction::create($request->all());
        return response($Revenuetransaction,200);
    }

    public function updateRevenuetransaction(Request $request,$id){
        $request->validate([
            'transactionNumber'=>'required',
            "benefactors_id"=>"required",
            'date' => 'required','date',
            'value' => 'required',


        ]);
        $Revenuetransaction=Revenuetransaction::find($id);
        if(is_null($Revenuetransaction)){
            return response()->json(['message'=>'Revenuetransaction not found'],404);
        }
        $Revenuetransaction->update($request->all());
        return response($Revenuetransaction, 201);
    }
    public function deleteRevenuetransaction(Request $request,$id){
        $Revenuetransaction=Revenuetransaction::find($id);
        if(is_null($Revenuetransaction)){
            return response()->json(['message'=>'Revenuetransaction not found'],404);
        }
        $Revenuetransaction->delete();
        return response()->json(null,204);
    }
}
