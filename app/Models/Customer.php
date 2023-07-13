<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Customer extends Model
{
    protected $table = "customers";
    protected $primaryKey = "id";
    protected $keyType = "string";
    public $incrementing = false;
    public $timestamps = false;

    public function wallet(): HasOne {
        return $this->hasOne(Wallet::class, "customer_id", "id");
    }

    public function virtualAccount() : HasOneThrough {
        return $this->hasOneThrough(VirtualAccount::class, Wallet::class, "customer_id", "wallet_id", "id", "id");
    }
}
