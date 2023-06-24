<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    //Question No- 5
    public function allPost(){
        $posts = Post::with('category')->get();

        return view ('posts', ['post'=> $posts]);
    }








    //Question No -7
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }



    //Quesiton no- 10
    public function getPostsByCategory($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts;

        return view('category.posts', compact('category', 'posts'));
    }


}
