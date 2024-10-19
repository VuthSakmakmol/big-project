<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    public function create()
    {
        return view('admin.create-content');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'text' => 'required|string|max:255',
        ]);

        // Store the uploaded image
        $path = $request->file('photo')->store('photos', 'public');

        Content::create([
            'user_id' => $request->user_id,
            'photo' => $path,
            'text' => $request->text,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Content created successfully.');
    }
}
