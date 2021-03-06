<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'produtos';
    
    protected $fillable = ['nome', 'sku', 'quantidade_inicial'];

    public function movimentacaoProdutos(){

        return $this->hasMany(MovimentacaoProdutos::class, 'id_produtos', 'id');
    }
}
