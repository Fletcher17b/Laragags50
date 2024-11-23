<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       /*  return [
            
            'id' => $this -> faker -> randomNumber($nbDigits = 4, $strict = false),
            'title' => $this -> faker-> word(),
        //    'image_id' => $this -> faker -> numberBetween($min = 1, $max = 3) ,
            'tags' => 'Laravel,API,Backend',
            'company' => $this -> faker -> company(),
            'location' => $this -> faker -> address(),
            'email' => $this -> faker -> companyEmail(),
            'website' => $this -> faker -> url(),
            'description' => $this -> faker -> paragraph()
        ]; */
        return [
            
            'id' => $this -> faker -> randomNumber($nbDigits = 4, $strict = false),
            'title' => $this -> faker-> word(),
           // 'image_id' => $this -> faker -> numberBetween($min = 1, $max = 3) ,
            'tags' =>$this->faker->randomElement(['Meme', 'Ironic', 'Humor']),
            //'company' => $this -> faker -> company(),
            //'location' => $this -> faker -> address(),
            'email' => $this -> faker -> email(),
            'website' => $this -> faker -> url(),
            'description' => $this -> faker -> paragraph()
        ];
    }
}
