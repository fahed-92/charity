<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser()
    {
        return response()->json(User::all(),200);
    }

    public function getUserById($id){
        $User=User::find($id);
        if(is_null($User)){
            return response()->json(['message'=>'User not found'],404);
        }
        return response()->json($User::find($id),200);
    }

    public function addUser(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'nationalId'=>'required',
            'email' =>'required',
            'phone' => 'required',
            'password' => 'required',
            'address' => 'required',
            'isAdmin'=>"required",

        ]);

        $User=User::create($request->all());
        return response($User,200);
    }

    public function updateUser(Request $request,$id){
        $request->validate([
            //'id' => 'required',
            'name' => 'required',
            'nationalId'=>'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'address' => 'required',
            'isAdmin'=>"required",

        ]);
        $User=User::find($id);
        if(is_null($User)){
            return response()->json(['message'=>'User not found'],404);
        }
        $User->update($request->all());
        return response($User, 201);
    }
    public function deleteUser(Request $request,$id){
         $User=User::find($id);
        if(is_null($User)){
            return response()->json(['message'=>'User not found'],404);
        }
        return $User->delete();
        return response()->json(null,204);
    }

}
