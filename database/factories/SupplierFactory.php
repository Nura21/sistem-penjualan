<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class SupplierFactory extends Factory
{
    public function definition()
    {
        $array = ['L', 'P'];
        
        return [
            'nama_supplier' => $this->faker->name(),
            'no_telp' => random_int(100000, 999999),
            'alamat' => Str::random(10),
        ];
    }
}
