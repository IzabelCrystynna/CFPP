<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraProduto extends Model
{
    public function produtos(){
    	return $this->hasMany(Produto::class, 'produto_id', 'id');
    }
    public function compras(){
    	return $this->hasMany(Compra::class, 'compra_id', 'id');
    }
}
