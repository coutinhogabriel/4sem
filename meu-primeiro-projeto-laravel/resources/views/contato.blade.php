<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('components.header')
<h2> CONTATO</h2>
            <label for="name"> Nome:</label>
            <input type="text" name="Nome" id="Nome"/>
            <hr/>
            <label for="pmail" title="Mail"> E-mail:</label>
            <input type="text" name="E-mail" id="pmail" />
            <hr/>
            <label for="Mensagem" title="Mensagem">Comentário:</label>
            <input type="text" name="Mensagem" id="Mensagem"/>
            <hr />
            <input type="submit" value="Enviar" />
    @include('components.footer')
</body>
</html>