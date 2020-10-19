<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            "title" => $this->faker->text('40'),
            "imageUrl" => 'https://c8.alamy.com/comp/K962T7/movie-icon-K962T7.jpg',
            'duration' => $this->faker->numberBetween(30, 300),
            'releaseDate'=> $this->faker->date('Y-m-d', 'now'),
            'genre' => $this->faker->word(),
            "director" => $this->faker->name()

        ];
    }
}

