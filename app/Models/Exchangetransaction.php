<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchangetransaction extends Model
{
    use HasFactory;

    protected $fillable=[
        'transactionNumber',
        'beneficiary_id'
        ,'date'
        ,'value'

    ];

    protected $hidden = [

    ];

    public function getBeneficiary() {
        return $this->hasOne(Beneficiary::class,"nationalId","beneficiary_id")->firstOrFail();
    }


}
