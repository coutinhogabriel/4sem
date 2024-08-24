@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="asset/img/1984.jpg" class="img-fluid" alt="{{ $livro->nome }}">
            </div>
            <div class="col-md-6">
                <h2>{{ $livro->nome }}</h2>
                <p>{{ $livro->categoria }}</p>
                <p>{{ $livro->descricao }}</p>
			
                <form method="POST" action="{{ route('emprestimo.add', $livro->id) }}">
                    @csrf
                    <label for='quantidade'>Selecione a quantidade</label>
                    <input type="number" name="quantidade" id="">
                    <button type="submit" class="btn btn-primary">Efetuar empréstimo</button>
                </form>
            </div>
        </div>
    </div>
@endsection