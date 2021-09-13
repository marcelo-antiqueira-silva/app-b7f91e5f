<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdutosController extends Controller
{
    public function createProduto(Request $request){

        try {
         
            $validacao = Validator::make($request->all(), [
                 'nome' => 'required|unique:produtos|max:255',
                 'sku'  => 'required|unique:produtos|max:255',
                 'quantidade_inicial'  => 'required|integer|gt:0'
            ]);
            
            $produto = new Produtos;
        
            $produto->nome = $request->nome;
            $produto->sku = $request->sku;
            $produto->quantidade_inicial = $request->quantidade_inicial;

            $produto->save();

            return response()->json([
                "message" => "Produto criado com sucesso!"
            ], 201);
            


        } catch (\Throwable $th) {
            $validacao->fails();
            
            return response()->json([
                "message" => "Não foi possível cadastrar o produto!Tente novamente.",
                "details" =>  $validacao->errors()
            ],400, [], JSON_UNESCAPED_UNICODE);

        } 



       

    

        // $request->validate([
        // ]);


        // 
    }
}
