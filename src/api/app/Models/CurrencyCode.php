<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrencyCode extends Model
{
    use HasFactory;

    protected $fillable = ['country', 'currency_code', 'currency_name', 'currency_symbol'];
}
