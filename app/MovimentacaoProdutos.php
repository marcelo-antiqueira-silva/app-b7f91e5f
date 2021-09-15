<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovimentacaoProdutos extends Model
{
    protected $table = 'movimentacao_produtos';

    protected $fillable = ['id_produtos','quantidade'];

    public function movimentacaoProdutos(){

        return $this->belongsTo(Produtos::class, 'sku', 'id');
    }
}
