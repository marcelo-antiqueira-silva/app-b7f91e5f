<?php

namespace App\Http\Controllers;

use App\MovimentacaoProdutos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MovimentacaoProdutosController extends Controller
{
    public function createMovimentacaoProduto(Request $request){
       
        try {
            
            $validacao = Validator::make($request->all(), [
             
                'sku'  => 'required|max:255',
                'quantidade'  => 'required|integer'
            ]);

            $movimentacaoProduto = new MovimentacaoProdutos();
            $movimentacaoProduto->sku = $request->sku;
            $movimentacaoProduto->quantidade = $request->quantidade;
            $movimentacaoProduto->save();
            $movimentacaoProduto = $movimentacaoProduto->fresh();

         
            return response()->json([
                "message" => "Movimentação do produto criado com sucesso!"
            ], 201);
            



        } catch (\Throwable $th) {
            $validacao->fails();
            
            return response()->json([
                "message" => "Não foi possível cadastrar a movimentação do produto!Tente novamente.",
                "details" =>  $validacao->errors()
            ],400, [], JSON_UNESCAPED_UNICODE);

        } 
        
    }

    public function listHistoricoMovimentacaoProdutos(){

    }
}
