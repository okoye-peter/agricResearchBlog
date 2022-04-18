<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Specialty;
class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(["Aquaculture","Beekeeping","Cannabis cultivation","Commercial farming","Cotton industry","Dairy farming","Domesticated animals","Domesticated plants","Floral industry","Forestry","Hemp agriculture","Insect farming","Insect industry","Jute industry","Livestock","Orchards","Organic farming","Permaculture","Pig farming","Poultry farming","Sheep farming","Silk production","Tea industry","Tobacco industry","Viticulture"])->each(function ($name) {
            Specialty::create([
                'name' => $name,
            ]);
        });
    }
}
