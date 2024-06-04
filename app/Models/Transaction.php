<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

protected $table='transactions';
protected $fulleable= ['id','type','date','transmitter','receiver','amount','half'];

public function bank_account()

{
    return $this->hasmany(Bank_account::class);
}


}
