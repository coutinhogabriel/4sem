<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Livro;


class HomeController extends Controller
{
    public function index()
    {
        // Pegue os 5 livros mais recentes, por exemplo
        $livros = Livro::take(5)->get(); //metódo take utilizado para pegar os ultimos 5 livros criados
        return view('home', compact('livros'));
    }
}