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
        $users = User::count();
        $posts = Post::count();
        $messages = Message::count();
        return view('admin.index', compact('users','posts','messages'));
    }
}
