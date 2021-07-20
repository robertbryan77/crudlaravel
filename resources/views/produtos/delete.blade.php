<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excluir um Produto</title>
</head>

<body>
    <form action="" method="post">
        @csrf
        @method('delete')
        <label>Tem certeza que deseja excluir este produto?</label> <br>
        <input type="text" name="nome" value="{{ $produto->nome }}"><br>
        <button type="submit">Sim</button>
    </form>
</body>

</html>
