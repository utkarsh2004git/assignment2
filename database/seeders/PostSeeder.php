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
        $post1=new Post;
        $post1->user_id=1;
        $post1->title="About Technology";
        $post1->category="Technology";
        $post1->content="Technology is a very good thing Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis fugit, id sapiente corrupti molestiae rem praesentium tenetur libero itaque officia tempore commodi ad nesciunt voluptas ipsum eum ea laboriosam dolores neque, expedita enim? Ex pariatur sapiente nobis magnam aliquam sit! Quae temporibus, exercitationem sapiente vitae quos accusantium commodi veritatis maxime adipisci nemo similique rem nobis at quam voluptatem, illo officia. At aut nulla quo voluptas vero atque nesciunt perferendis? Molestiae vero cupiditate quod quidem officia corrupti tenetur illo quia dolorem amet, autem facilis? Quos, commodi atque delectus in accusantium doloribus asperiores reiciendis laborum dolore adipisci non neque cum deleniti corporis illo vero ducimus quaerat rerum modi animi pariatur. Officia sunt labore consequuntur inventore consequatur, illum delectus soluta, ab eaque magnam quis id maxime voluptatibus. Dolore explicabo doloremque possimus incidunt porro? ";
        $post1->creator="Utkarsh Shahare";
        $post1->save();
        
        $post2=new Post;
        $post2->user_id=2;
        $post2->title="About Agriculture";
        $post2->category="Agriculture";
        $post2->content="Agriculture is a very good thing Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis fugit, id sapiente corrupti molestiae rem praesentium tenetur libero itaque officia tempore commodi ad nesciunt voluptas ipsum eum ea laboriosam dolores neque, expedita enim? Ex pariatur sapiente nobis magnam aliquam sit! Quae temporibus, exercitationem sapiente vitae quos accusantium commodi veritatis maxime adipisci nemo similique rem nobis at quam voluptatem, illo officia. At aut nulla quo voluptas vero atque nesciunt perferendis? Molestiae vero cupiditate quod quidem officia corrupti tenetur illo quia dolorem amet, autem facilis? Quos, commodi atque delectus in accusantium doloribus asperiores reiciendis laborum dolore adipisci non neque cum deleniti corporis illo vero ducimus quaerat rerum modi animi pariatur. Officia sunt labore consequuntur inventore consequatur, illum delectus soluta, ab eaque magnam quis id maxime voluptatibus. Dolore explicabo doloremque possimus incidunt porro?";
        $post2->creator="Sahil Sharma";
        $post2->save();
        
        $post3=new Post;
        $post3->user_id=3;
        $post3->title="About Politics";
        $post3->category="Politics";
        $post3->content="Politics is a very good thing Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis fugit, id sapiente corrupti molestiae rem praesentium tenetur libero itaque officia tempore commodi ad nesciunt voluptas ipsum eum ea laboriosam dolores neque, expedita enim? Ex pariatur sapiente nobis magnam aliquam sit! Quae temporibus, exercitationem sapiente vitae quos accusantium commodi veritatis maxime adipisci nemo similique rem nobis at quam voluptatem, illo officia. At aut nulla quo voluptas vero atque nesciunt perferendis? Molestiae vero cupiditate quod quidem officia corrupti tenetur illo quia dolorem amet, autem facilis? Quos, commodi atque delectus in accusantium doloribus asperiores reiciendis laborum dolore adipisci non neque cum deleniti corporis illo vero ducimus quaerat rerum modi animi pariatur. Officia sunt labore consequuntur inventore consequatur, illum delectus soluta, ab eaque magnam quis id maxime voluptatibus. Dolore explicabo doloremque possimus incidunt porro?";
        $post3->creator="Sonali Kumar";
        $post3->save();

        $faker =Faker::create();

        for ($i=4; $i < 10; $i++) { 
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

