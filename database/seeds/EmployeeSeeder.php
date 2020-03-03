<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        foreach (range(1, 100) as $index) {
            $username = $faker->userName();
            $password = bcrypt($username);
            $role = ['operator','admin'];
            Employee::create([
                'name' => $faker->name(),
                'username' => $username,
                'password' => $password,
                'role' => $role[rand(0, 1)]=='operator'?'operator':'admin',
            ]);
        }
    }
}
