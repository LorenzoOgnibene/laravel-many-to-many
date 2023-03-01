<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['HTML', 'CSS', 'JavaScript', 'SASS', 'Laravel', 'Bootstrap', 'VueJs 3', 'PHP', 'Node.Js', 'MySql'];
        foreach ($technologies as $technologyName) {
            $newTechnologies = new Technology();
            $newTechnologies->name = $technologyName;
            $newTechnologies->save();
        }
    }
}
