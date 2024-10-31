<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCurrency extends Model
{
    use HasFactory;

    protected $table = 'users_currencies';

    protected $fillable = [
        'user_id',
        'currency_code',
        'currency_symbol',
        'unit_value',
        'is_primary',
    ];
}
