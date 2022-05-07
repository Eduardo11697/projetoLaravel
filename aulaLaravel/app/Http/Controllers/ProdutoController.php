<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
      /*$produtos = ['Produto 1', 'Produto 2', 'Produtos 3', 'Produto 4'];
        return &produtos;
    */
        $valor = 10.00;
        return view('produtoTeste',['valor'=>$valor]);    
    }

    public function show($id){
        return "Apresentando o produto de id: {&id}";
    }

}

