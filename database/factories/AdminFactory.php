<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => "decoshop",
            'email' => "decoshop@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make("admin"), // password
            'remember_token' => Str::random(10),
           
        ];
    }
}
