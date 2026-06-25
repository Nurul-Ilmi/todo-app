<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255'
        ]);

        $task = Task::create([
            'title' => $request->title
        ]);

        return response()->json([
            'message' => 'Task berhasil ditambahkan!',
            'data' => $task
        ], 201);
    }
}
