<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMessagesController extends Controller
{
    public function index()
    {
        return view('admin.messages.index');
    }
}
