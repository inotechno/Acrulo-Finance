<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Brick\Math\BigDecimal;
use Brick\Math\RoundingMode;
use Brick\Money\Money;
use Illuminate\Http\Request;
use Worksome\Exchange\Facades\Exchange;

class CurrencyConvert extends Controller
{
    public function index()
    {
        $exchangeRates = Exchange::rates('USD', ['IDR', 'EUR']);
        $rates = $exchangeRates->getRates(); // Get rates

        // Convert to Money type with rounding
        $formattedRates = [];
        foreach ($rates as $currency => $rate) {
            try {
                // Create a BigDecimal object from the rate
                $bigDecimalRate = BigDecimal::of($rate);

                // Divide by 1 (or any scale factor you need) and specify the scale and rounding mode
                $dividedRate = $bigDecimalRate->dividedBy(BigDecimal::one(), 5, RoundingMode::HALF_UP); // 4 decimal places

                // Store formatted value as string
                $formattedRates[$currency] = (string) $dividedRate; // Use string cast
            } catch (\Brick\Math\Exception\RoundingNecessaryException $e) {
                // Handle rounding necessity gracefully
                $formattedRates[$currency] = 'Rounding necessary for ' . $currency;
            }
        }

        return response()->json($formattedRates); // Return the formatted rates
    }
}
