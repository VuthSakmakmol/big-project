<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); // Create an admin dashboard view
    }

    public function manageUsers()
    {
        $users = User::all();  // Fetch all users
        return view('admin.users', compact('users'));  // Create an admin users view
    }
}
