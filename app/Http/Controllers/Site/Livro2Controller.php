<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Livro;
use Illuminate\Http\Request;

class Livro2Controller extends Controller
{

    public function index() {
        $titulo = "Meu Livros";
        $livros = Livro::all();

        return view('site.livro.index', ['titulo' => $titulo, 'livros' => $livros]);
    }

    public function show($id) {
        $livro = Livro::findOrFail($id);

        return view('site.livro.show', ['livro' => $livro]);
    }
    
    public function create(){
        return view('site.livro.create');
    } 

    public function store(Request $request){
        $livro = Livro::create($request->all());
       

        if($livro){
           return redirect()->route('livros.index');
        }
        else {
           return redirect()->route('livros.create');
        }
    }

    public function edit($id) {
        $livro = Livro::findOrFail($id);
        return view('site.livro.edit', ['livro' =>$livro]);
    }

    public function update(Request $request, $id) {
        $livro = Livro::findOrFail($id);
        $livro->update($request->all());

        if ($livro) {
            return redirect()->route("livros.show", $livro->id);
        }
        else {
            return redirect()->route("livros.edit", $livro->id);
        }
    }

}