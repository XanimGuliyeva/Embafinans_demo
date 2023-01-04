<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = \Illuminate\Support\Facades\Hash::make('embafinans357');
        $add = new App\Users\Users();
        $add->phone = 'Admin';
        $add->email = 'embafinans@gmail.com';
        $add->fin = 'Admin';
        do
        {
            $code = 'MG'.rand(100000, 999999);
            $user_code = \App\Users\Users::where('user_code', $code)->get();
        }
        while(!$user_code->isEmpty());
        $add->user_code = $code;
        $add->category = 'admin';
        $add->password = $password;
        $add->save();
    }
}
