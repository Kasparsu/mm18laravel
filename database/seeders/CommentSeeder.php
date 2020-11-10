<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        foreach ($posts as $post){
            Comment::factory()
                ->times(rand(0, 10))
                ->make(['post_id' => $post->id])
                ->each(function($comment){
                    $user = User::inRandomOrder()->first();
                    $comment->user_id = $user->id;
                    $comment->save();
                });
        }
    }
}
