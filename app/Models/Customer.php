<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customers';
    protected $fulleable=['id','name','last_name','gender','identification_card','telephone','email','address','civil_status'];

public function bank_account()

{
    return $this->hasone(Bank_account::class);
}


}
