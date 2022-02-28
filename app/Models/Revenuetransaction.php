<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenuetransaction extends Model
{
    use HasFactory;

    protected $fillable=[
        'transactionNumber',
        'benefactors_id',
        'date',
        'value',
    ];
    protected $hidden = [

    ];
    public function getBenefactor() {
        return $this->hasOne(Benefactor::class,"nationalId","benefactors_id")->firstOrFail();
    }

}
