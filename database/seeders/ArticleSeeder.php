<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for ($i= 0; $i < 10; $i++) {
//            DB::table('articles')->insert([
//                'id' => rand(1000, 9999),
//                'title' => Str::random(50),
//                'slug' => Str::random(10),
//                'body' => Str::random(30),
//                'user_id' => rand(1000, 9999),
//                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
//                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
//            ]);
//        }
        Article::factory()->count(10)->create();
    }
}
