<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enum\Currency;
use Illuminate\Support\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exchange>
 */
class ExchangeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $currencies = Currency::getAllValues();
        $date = Carbon::now()->subDays(rand(1, 365))->format('Y-m-d');
        $amount = number_format(rand(1, 10000) / 100, 2);
    
        return [
            'currency' => $currencies[rand(0, 2)],
            'date' => $date,
            'amount' => $amount,
        ];
    }
}
