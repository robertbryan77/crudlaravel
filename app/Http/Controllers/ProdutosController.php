<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use App\Models\Produtos;


class ProdutosController extends Controller
{
    
    public function create()
    {
        return view('produtos.create');
    }

    public function list()
    {
        $produto=Produto::get();
        return view('produtos.list', ['produtos'=>$produto]);
    }

    public function store(Request $request)
    {   
            $request->validate([
            'nome' => 'required',
            'preco' => 'required',
            'custo' => 'required',
            'quantidade' => 'required',
        ]);
        Produto::Create([
            'nome'=>$request->nome,
            'preco'=>$request->preco,
            'custo'=>$request->custo,
            'quantidade'=>$request->quantidade,
        ]);

        $request->session()->flash('message', 'Produto Criado com Sucesso!');
        return redirect('/produtos/list');
    }

    public function show($id)
    { 
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produto' => $produto]);
    }

    public function edit($id)
    { 
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id)
    { 
        $produto = Produto::findOrFail($id);

        $request->validate([
            'nome' => 'required',
            'preco' => 'required',
            'custo' => 'required',
            'quantidade' => 'required',
        ]);
        
        $produto->update([
            'nome'=>$request->nome,
            'preco'=>$request->preco,
            'custo'=>$request->custo,
            'quantidade'=>$request->quantidade,
        ]);
        
        $request->session()->flash('message', 'Produto Atualizado com Sucesso!');
        return redirect('/produtos/list');
    }

    public function delete($id)
    {
        
        $produto = Produto::findOrFail($id);
        return view('produtos.delete', ['produto' => $produto]);
    
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        session()->flash('message', 'Produto Deletado com Sucesso!');
        
        return redirect('produtos/list');

    }
} 
