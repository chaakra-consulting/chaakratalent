<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraphs(3, true),
            'image' => $this->faker->imageUrl(),
            'tags' =>  $this->faker->words(1, true),
            'views' => $this->faker->numberBetween(0, 1000),
            'description' => $this->faker->sentence(),
            'keywords' => implode(',', $this->faker->words(5)),
        ];
    }
}
