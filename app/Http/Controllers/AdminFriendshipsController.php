<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminFriendshipsController extends Controller
{
    public function index()
    {
        return view('admin.friendships.index');
    }
}
