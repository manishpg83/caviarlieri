<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'country';
    protected $fillable = [
        'name',
        'currency_code',
        'currency_name',
        'currency_symbol',
        'phonecode',
    ];

    public function currencyRates()
    {
        return $this->hasMany(CurrencyRate::class);
    }
}
