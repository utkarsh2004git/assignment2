<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker =Faker::create();

        $post1=new Post;
        $post1->user_id=1;
        $post1->title="About Technology";
        $post1->category="Technology";
        $post1->content=$faker->sentence(200);
        $post1->creator="Utkarsh Shahare";
        $post1->save();
        
        $post2=new Post;
        $post2->user_id=2;
        $post2->title="About Agriculture";
        $post2->category="Agriculture";
        $post2->content=$faker->sentence(200);
        $post2->creator="Sahil Sharma";
        $post2->save();
        
        $post3=new Post;
        $post3->user_id=3;
        $post3->title="About Politics";
        $post3->category="Politics";
        $post3->content=$faker->sentence(200);
        $post3->creator="Sonali Kumar";
        $post3->save();

        

        for ($i=4; $i < 20; $i++) { 
            $post=new Post;
            $post->user_id=$i;
            $temp=$faker->randomElement(['Politics', 'Agriculture',"Sports","Technology","Spiritual"]);
            $post->category= $temp;
            $post->title= "About " . $temp;
            $post->content=$faker->sentence(200);
            $post->creator=$faker->name;
            $post->save();
        }
        
    }
}

