<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/dist/bootstrap-icons.min.css">
</head>
<body>
@include('components.header')   
<div class="container">
        <h2 class="text-center"></h2>
        <div class="row">
            <div class="col-md-4">
                <h3 class=""></h3>
                <div class="card">
                    <img src="img/card0.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/card1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/card2.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <h3 class=""></h3>
                <div class="card">
                    <img src="img/card3.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/card4.webp" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/card5.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <h3 class="text-center"></h3>
                <div class="card">
                    <img src="img/card6.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/card7.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/card8.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('components.footer')
</body>
</html> -->

<div class="container">
        <h1>Produtos</h1>
        <a href="" class="btn btn-primary">Adicionar Produto</a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>{{ $produto->quantidade }}</td>
                        
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>