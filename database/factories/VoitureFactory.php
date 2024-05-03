<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Voiture>
 */
class VoitureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $voiture_name = $this->faker->unique()->words($nb=6, $asText= true);  //generate a unique random category name with two
        $slug =Str::slug($voiture_name,'-');
        return [
            "name" =>$voiture_name,
            'slug'=>$slug,
            'short_description'=>$this->faker->text(50),
            'description'=>$this->faker->text(100),
            'regular_price'=>$this->faker->numberBetween(10,500),
            'SKU'=>'PRD' . $this->faker->unique()->numberBetween(100,500),
            'stock_status'=>'instock',
            'quantity'=>$this->faker->numberBEtween(10,50),
            'image'=>'product'.$this->faker->numberBetween(1,16),
            'marque' =>$this->faker->word,
            'model' =>$this->faker->word,
            'immatriculation' =>$this->faker->unique()->ean13,
            'kilometrage' =>$this->faker->numberBetween(1000, 100000),
            'date_assurance' =>$this->faker->date(),
            'etat' =>$this->faker->randomElement(['neuf', 'occasion']),
            'category_id'=>$this->faker->numberBetween(1,5)

        ];
    }
}
