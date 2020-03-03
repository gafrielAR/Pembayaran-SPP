<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Grade;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            $major = [
                'X', 'XI', 'XII'
            ]; 
            Grade::create([
                'name' => $major[rand(0, 2)],
                'major' => $faker->jobTitle(),
            ]);
        }
    }
}
