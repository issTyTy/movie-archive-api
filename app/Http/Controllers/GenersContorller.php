<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Geners;

class GenersController extends Controller
{
    
    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string'
  ]);

    $Geners = Geners::create($data);

    return response()->json($Geners, 201);
}
public function index()
{
    $Generss = Geners::all();

    return response()->json($Generss);
}

public function show($id)
{
    $Geners = Geners::findOrFail($id);

    return response()->json($Geners);
}


public function update(Request $request, $id)
{
    $Geners = Geners::findOrFail($id);

    $data = $request->validate([
        'name' => 'string'
    ]);

    $Geners->update($data);

    return response()->json($Geners);
}

public function delete($id)
{
    $Geners = Geners::findOrFail($id);
    $Geners->delete();

    return response()->json(['message' => 'deleted successfully']);
}


}
