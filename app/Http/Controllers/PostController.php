<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $page_title = "صفحه ی خوش آمد گویی";
//        $posts = DB::table('posts')->get();
//        $posts = DB::table('posts')->get('id');
//        $posts = DB::table('posts')->get(['id', 'title']);
//        $posts = DB::table('posts')->select('id', 'title')->get();
//        $posts = DB::table('posts')->orderBy('id', 'DESC')->get();
//        $posts = DB::table('posts')->where('id', '>=', 1)->get();
//          $posts = DB::table('posts')
//            ->select('id', 'title', 'description')
//            ->where('id', '>=', 1)
//            ->get();
        $post_count = DB::table('posts')->count();
        $max_id = DB::table('posts')->max('id');
        $posts = DB::table('posts')
            ->select('id', 'title', 'description')
            ->where('user_id', '=', 1)
            ->paginate(1);

        return view('post', compact('page_title', 'posts', 'post_count', 'max_id'));
    }
}
