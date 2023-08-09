<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $new_post = [
            'title' => 'Meu primeiro crud',
            'content' => 'Conteúdo Qualquer',
            'author' => 'João Pedro'
        ];

        $post = new Post($new_post);
        $post->save($new_post);

        dd($new_post);
    }
    
    public function read(Request $request)
    {
        $post = new Post();

        $post = $post->find(2);

        return $post;

    }

    public function all(Request $request)
    {
        $posts = Post::all();

        return $posts;
    }

    public function update(Request $request)
    {
        $posts = Post::where('id', '>', 1)->update([
            'author' => 'Girlene',
            'title' => 'Eu sou autora desse livro'
        ]);

        return $posts;
    }
    
    public function delete(Request $request)
    {
        $posts = Post::where('id','>',0)->delete();

        return $posts;

    }


}