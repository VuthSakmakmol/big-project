<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $content = Content::where('user_id', auth()->id())->first();  // Fetch user content
        return view('user.dashboard', compact('content'));
    }
}
