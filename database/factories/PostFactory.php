<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Membuat post faker 'php artisan make:factory PostFactory' mt_rand(mulaidari1, sampai5)
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5,100))) . '</p>',
            'user_id' => mt_rand(1,5),
            'category_id' => mt_rand(1,2) 
        ];
    }
}
