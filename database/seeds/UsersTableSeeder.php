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
        //

        \Illuminate\Support\Facades\DB::table("users")->insert([
            'name'=>'ys',
            'email'=>'280267663'.'@qq.com',
            'password'=>bcrypt('secret'),
            'created_at'=>now()->toDateTimeString(),
            'updated_at'=>now()->toDateTimeString(),
        ]);
    }
}
