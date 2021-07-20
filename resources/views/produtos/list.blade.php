<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Completa</title>
</head>
<style>
    table{
        background-color: collapse;
        width: 100%;
    }
    td, th{
        padding: 5px;
        border: 1px solid;
    }
</style>
<body>
  <form>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <table border="20">
        <thead>
            <tr>
                <td>Nome</td>
                <td>Custo</td>
                <td>Preço</td>
                <td>Quantidade</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
           
            @foreach ( $produtos as $produto )
            <tr>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->custo }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->quantidade }}</td>
                <td> 
                    <a href="{{route('registrar_produto', $produto->id)}}">Add</a> |
                    <a href="{{route('alterar_produto', $produto->id)}}">Edit</a> |
                    <a href="{{route('excluir_produto', $produto->id)}}">Delete</a>
                        @csrf
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</form>
</body>

</html>
