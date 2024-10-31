<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $models = Post::all();
        return view('Client.index',['models' => $models]);
    }
}
