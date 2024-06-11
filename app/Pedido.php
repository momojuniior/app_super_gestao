<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function produtos() {
        return $this->belongsToMany('App\Produto', 'pedidos_produtos')->withPivot('id', 'created_at', 'updated_at');
    }
}
