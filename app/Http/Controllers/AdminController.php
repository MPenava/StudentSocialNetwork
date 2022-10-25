<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $users_num = User::count();
        $posts_num = Post::count();
        $messages_num = Message::count();
        $users = User::all();
        $posts = Post::all();
        return view('admin.index', compact('users','posts','users_num','posts_num','messages_num'));
    }
}
