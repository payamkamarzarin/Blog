<?php 

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class BlogRepo
{
    public function getAll(){
        return Post::query()->get();
    }

    public function showUser(){
        return Auth::user();
    }
}
