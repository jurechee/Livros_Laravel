<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Livro::all();
    }

   
    public function store(Request $request)
    {
        $livro = Livro::create($request->all());
        return $livro;
    }

    
    public function show($id)
    {
        $livro = Livro::findOrFail($id);
        return $livro;
    }

    
    
    public function update(Request $request, $id)
    {
        $livro = Livro::findOrFail($id);
        $livro->update($request->all());
        return $livro;
    }

    
    public function destroy($id)
    {
        $livro = Livro::findOrFail($id);
        $livro->delete();
    }
}
