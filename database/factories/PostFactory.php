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
        return [
            'title' => $this->faker->sentence(mt_rand(2,5)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            //membuat beberapa paragraph untuk data dummy
            //1
            //implode atau join untuk membuat paragraphs dari beberapa paragraph
            //'body' => '<p>' . implode('</p><p>',$this->faker->paragraphs(mt_rand(3,5))) . '</p>',
            //2
            //menggunakan fitur collect
            // 'body' => collect($this->faker->paragraphs(mt_rand(5,10)))
            //             ->map(function($p){
            //             return "<p>$p</p>";
            //             }),
            //3
            //menggunakan arrow function / syntax php baru
            'body' => collect($this->faker->paragraphs(mt_rand(5,10)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
            'category_id' => mt_rand(1,4),
            'user_id' => mt_rand(1,5)
        ];
    }
}
