<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use Illuminate\Support\Facades\Auth;
use App\Models\Emprestimo;

class EmprestimoController extends Controller
{
    public function add(Request $request, Livro $livro){
        
        Emprestimo::create(['id_livro'=>$livro->id, 'id_user'=>Auth::id(), 'quantidade'=>$request->quantidade]);

        return redirect()->route('livros.show', $livro)->with('sucess', 'Livro emprestado.');
    }
}
