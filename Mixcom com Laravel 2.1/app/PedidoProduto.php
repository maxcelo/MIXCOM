<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    protected $fillabe=[
        'pedido_id',
        'produto_id',
        'status',
        'valor'
    ];

    public function produto(){
        return $this->belongsTo('App\Produto', 'produto_id', 'id');
    }
}
