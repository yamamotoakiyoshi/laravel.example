<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //delete all data.
        User::truncate();

        //faker
        $faker = Faker\Factory::create('ja_JP');

        //insert
        for($i=0;$i<25;$i++)
        {
            $user = User::create();

            $user->name = $faker->userName();
            $user->email = $faker->unique()->email();
            $user->password = Hash::make($user->email); //パスワードはとりあえずemailをハッシュ化。

            $user->save();
    }
}
