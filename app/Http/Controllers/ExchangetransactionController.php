<?php

namespace App\Http\Controllers;

use App\Models\Exchangetransaction;
use Illuminate\Http\Request;

class ExchangetransactionController extends Controller
{
    public function getExchangetransaction()
    {
        return response()->json(Exchangetransaction::all(),200);
    }

    public function getExchangetransactionById($id){
        $Exchangetransaction=Exchangetransaction::find($id);
        if(is_null($Exchangetransaction)){
            return response()->json(['message'=>'Exchangetransaction not found'],404);
        }
        return response()->json($Exchangetransaction::find($id),200);
    }

    public function addExchangetransaction(Request $request)
    {
        $request->validate([
            'transactionNumber'=>'required',
            "beneficiary_id"=>"required",
            'date' => 'required','date',
            'value' => 'required',


        ]);

        $Exchangetransaction=Exchangetransaction::create($request->all());
        return response($Exchangetransaction,200);
    }

    public function updateExchangetransaction(Request $request,$id){
        $request->validate([
            'transactionNumber'=>'required',
            "beneficiary_id"=>"required",
            'date' => 'required','date',
            'value' => 'required',


        ]);
        $Exchangetransaction=Exchangetransaction::find($id);
        if(is_null($Exchangetransaction)){
            return response()->json(['message'=>'Exchangetransaction not found'],404);
        }
        $Exchangetransaction->update($request->all());
        return response($Exchangetransaction, 201);
    }
    public function deleteExchangetransaction(Request $request,$id){
        $Exchangetransaction=Exchangetransaction::find($id);
        if(is_null($Exchangetransaction)){
            return response()->json(['message'=>'Exchangetransaction not found'],404);
        }
        $Exchangetransaction->delete();
        return response()->json(null,204);
    }

    public function getExchanges()
    {
        $exchanges=Exchangetransaction::get();
        $sum= collect($exchanges)->sum('value');
        return response()->json($sum,200);

    }
}
