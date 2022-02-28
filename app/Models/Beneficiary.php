<?php

namespace App\Models;

use App\Services\UserServices;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;

    protected $fillable=[
            'nationalId',
            'name',
            'email',
            'phone',
            'address',

    ];
    protected $hidden = [

    ];


    public function getExchangetransaction() {
        $this->hasMany(Exchangetransaction::class,"beneficiary_id",'nationalId')->get();
    }

}
