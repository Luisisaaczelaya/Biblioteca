<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank_account extends Model
{
    protected $table='bank_accounts';
    protected $fulleable=['id','holder','movements','type'];

    public function customers()

{
    return $this->hasone(Customer::class);

}

public function transactions()
{
    return $this->hasone(Transaction::class);
}
}
