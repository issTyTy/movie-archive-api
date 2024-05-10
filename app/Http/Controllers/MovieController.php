<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{

    public function test()
    {
        return response()->json(['message' => 'Test route works!']);
    }



    public function __construct()
    {
        $this->middleware('auth:api');

    }

    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string',
        'production' => 'nullable|string',
        'geners_id' => 'required|integer',
        'director' => 'nullable|string',
        'rate' => 'nullable|string',
        'cover' => 'nullable|file|image',
        'video' => 'nullable|file|image',
        'duration' => 'nullable|integer',
  ]);

    $Movie = Movie::create($data);

    return response()->json($Movie, 201);
}
public function index()
{
    $Movies = Movie::all();

    return response()->json($Movies);
}

public function show($id)
{
    $Movie = Movie::findOrFail($id);

    return response()->json($Movie);
}


public function update(Request $request, $id)
{
    $Movie = Movie::findOrFail($id);

    $data = $request->validate([
        'name' => 'required|string',
        'production' => 'nullable|string',
        'geners_id' => 'required|integer',
        'director' => 'nullable|string',
        'rate' => 'nullable|string',
        'cover' => 'nullable|file|image',
        'video' => 'nullable|file|image',
        'duration' => 'nullable|integer',
    ]);

    $Movie->update($data);

    return response()->json($Movie);
}

public function delete($id)
{
    $Movie = Movie::findOrFail($id);
    $Movie->delete();

    return response()->json(['message' => 'deleted successfully']);
}




}
