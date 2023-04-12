<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for ($i = 0; $i < 10; $i++) {
//            DB::table('users')->insert([
//                'id' => rand(1000, 9999),
//                'name' => Str::random(10),
//                'email' => Str::random(10).'@gmail.com',
//                'email_verified_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
//                'password' => Hash::make('password'),
//                'remember_token' => Str::random(20),
//                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
//                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
//            ]);
//        }
        User::factory()->count(10)->create();
    }
}
