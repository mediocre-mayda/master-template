<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'title' => $this->faker->word,
            'slug' => $this->faker->slug,
            'is_feature' => $this->faker->randomDigit,
            'priority' => $this->faker->randomDigit,
            'icon_map_marker' => $this->faker->imageUrl(40, 40),
            'type' => $this->faker->word,
            'status' => $this->faker->boolean,
        ];
    }
}
