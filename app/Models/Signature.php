<?php

namespace App\Models;

use App\Enums\SignatureStatus;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    protected $fillable = [
        'client_id',
        'plan_id',
        'status'
    ];

    protected $casts = [
        'status' => SignatureStatus::class
    ];
}
