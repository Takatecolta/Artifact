<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=>1,
            'name'=>'Riku',
            'email'=>'taka1@test.com',
            'email_verified_at'=>now(),//実在しないやつでもいける
            'password'=>'Riku0630',
            'sex'=>0,
            'age'=>21,
            'image'=>'taka',
            'bgm'=>null,
            'remember_token' => null,
            'updated_at'=>now(),
            'created_at'=>now(),
            ]);
    }
}
