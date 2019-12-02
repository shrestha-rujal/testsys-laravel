<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker=\Faker\Factory::create();
        $passsword=Hash::make('chandan123');
        
        for($i=0;$i<50;$i++){
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>$passsword,
            ]);
        }
    }
}
