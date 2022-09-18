<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ClientFactory extends Factory
{

    public function definition()
    {
        $array = ['L', 'P'];
        
        return [
            'nama_pembeli' => $this->faker->name(),
            'jk' => Arr::random($array),
            'no_telp' => random_int(100000, 999999),
            'alamat' => Str::random(10),
        ];
    }
}
