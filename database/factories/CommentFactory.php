<?php

namespace Database\Factories;

use App\Models\Session;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'session_id' => Session::factory(),
            'user_id' =>  Session::factory(),
            'body' => $this->faker->paragraph()
        ];
    }
}
