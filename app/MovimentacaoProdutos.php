<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovimentacaoProdutos extends Model
{
    protected $table = 'movimentacao_produtos';

    protected $fillable = ['sku','quantidade'];
}
