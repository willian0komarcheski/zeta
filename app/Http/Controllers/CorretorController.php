<?php

namespace App\Http\Controllers;

use App\Models\Corretor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Resources\CorretorResource;

class CorretorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $corretores = Corretor::all();
        return response()->json($corretores);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $corretor = Corretor::create($request->all());
        return response()->json($corretor, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $corretor = Corretor::findOrFail($id);
        return $corretor;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $corretor = Corretor::findOrFail($id);
        $corretor->update($data);
        return $corretor;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Corretor::destroy($id);
        return response()->json(null, 204);
    }
}
