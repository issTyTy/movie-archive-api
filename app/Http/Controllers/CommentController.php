<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    
    public function store(Request $request)
{
    $data = $request->validate([
        'comment' => 'required|string',
        'movie_id' => 'required|integer'

  ]); 

    $Comment = Comment::create($data);

    return response()->json($Comment, 201);
}
public function index()
{
    $Comments = Comment::all();

    return response()->json($Comments);
}

public function show($id)
{
    $Comment = Comment::findOrFail($id);

    return response()->json($Comment);
}


public function update(Request $request, $id)
{
    $Comment = Comment::findOrFail($id);

    $data = $request->validate([
        'comment' => 'required|string',
        'Comment_id' => 'required|integer'
    ]);

    $Comment->update($data);

    return response()->json($Comment);
}

public function delete($id)
{
    $Comment = Comment::findOrFail($id);
    $Comment->delete();

    return response()->json(['message' => 'deleted successfully']);
}


}
