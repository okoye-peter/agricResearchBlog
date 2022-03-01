<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SpecialtyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $specialty = [
            'Aquaculture','Beekeeping',
            'Cannabis cultivation',
            'Commercial farming','Cotton industry',
            'Dairy farming', 'Domesticated animals',
            'Domesticated plants','Floral industry',
            'Forestry','Hemp agriculture',
            'Insect farming','Insect industry',
            'Jute industry','Livestock',
            'Orchards','Organic farming',
            'Permaculture','Pig farming',
            'Poultry farming','Sheep farming',
            'Silk production','Tea industry',
            'Tobacco industry','Viticulture'
        ];

        return [
            'name' => $specialty
        ];
    }
}
