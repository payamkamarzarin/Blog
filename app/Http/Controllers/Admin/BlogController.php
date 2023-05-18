<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use App\Models\User;
use App\Repositories\BlogRepo;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $blogRepo ;

    public function __construct(BlogRepo $blogRepo){
        $this-> blogRepo = $blogRepo;
    }

    public function index(User $user){
        // $user = Auth::user();
        $users = $this->blogRepo->showUser();
        return view('admin.index',[
            'users' => $user,
            'username' => $users->firstname
        ]);
    }
    public function list(){

        $posts = $this->blogRepo->getAll();
        $users = $this->blogRepo->showUser();
        return view('admin.blog.list', [
            'posts' => $posts,
            'username' => $users->firstname
        ]);
    }

    public function create(){
        $users = $this->blogRepo->showUser();
        return view('admin.blog.create',[
            'username' => $users->firstname
        ]);
    }

    public function store(BlogRequest $request){

        $validate_data = $request->validated();
        Post::create([
            'title' => $validate_data['title'],
            'text' => $validate_data['text'],
            'slug' => $validate_data['slug'],
        ]);

        return redirect('/admin/create');
    }

    public function edit(Post $post){

        $users = $this->blogRepo->showUser();
        return view('admin.blog.edit',[
            'post' => $post,
            'username' => $users->firstname
        ]);
    }

    public function updat(BlogRequest $request,Post $post){
        
        $validate_data = $request->validated();
        $post->update([
            'title' => request('title'),
            'text' => request('text'),
            'slug' => request('slug'),
        ]);
        return redirect('/admin/list');
    }

    public function delete(Post $post){

        $post->delete();

        return redirect('/admin/blog/list');
    }

}
