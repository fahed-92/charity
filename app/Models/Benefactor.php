<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefactor extends Model
{
    use HasFactory;
    protected $fillable = [
      "nationalId" ,
      "name",
      "email",
        "phone",
      "photo",
      "address",

    ];

    protected $hidden = [

    ];

    public function getRevenuetransaction() {
        $this->hasMany(Revenuetransaction::class,"benefactors_id",'nationalId')->get();
    }

}
