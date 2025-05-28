<?php

namespace App\Http\Controllers;

use App\Http\Requests\createblogRequest;
use App\Models\categorie;
use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\BooleanNot;
class blogController extends Controller
{
    public function index(){
        
       
        return view('blog.index',[
            "posts" => post::paginate()
        ]);
    }
    public function show(string $slug,string $id) {
        $post = post::findorFail($id);
        if($post->slug !== $slug){
            return to_route('blog.index',['slug'=>$post->slug,'id'=>$post->id]);
        }
    return view('blog.show',[
        'post'=>$post
    ]);
    }
    
    public function create(){
        return view('blog.new');
    }
    public function store(Request $request,blogController $req){
        $post = Post::create([
            'title' => $request->input('title'),
            'Content' => $request->input('content'),
            'slug' => \Str::slug($request->input('title'))
        ]);
        return redirect()->route('blog.show',['slug'=>$post->slug,'id'=>$post->id])->with('success','l article a bien etete sauvegarder');
    }
    //
}
