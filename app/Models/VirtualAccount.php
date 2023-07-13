<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VirtualAccount extends Model
{
    protected $table = "virtual_accounts";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $incrementing = true;
    public $timestamps = false;

    public function wallet(): BelongsTo
    {
        return $this->belongsTo(Wallet::class, "wallet_id", "id");
    }
}
