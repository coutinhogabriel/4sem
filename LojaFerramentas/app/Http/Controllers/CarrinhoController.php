<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class CarrinhoController extends Controller
{
    public fuction add(Request $request, Poduto $produto){
        $dados = $request->validate([
            'quantidade' =>'required|numeric|min:1'
        ]);
        Produto::create(['id_produto'=>$produto->id, 'id_user'=>Auth::id(), 'quantidade'=>$request->quantidade]);


    }
}
