<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $faker = Faker\Factory::create('vi_VN');
        $limit = 100;
        for ($i = 0; $i < $limit; $i++) {
            App\Models\User::create([
                'email' => $faker->email,
                'password' => $faker->password,
                'name' => $faker->name,
                'point' => $faker->name,
                'role' => rand(1,2)
            ]);
        }
    }
}
