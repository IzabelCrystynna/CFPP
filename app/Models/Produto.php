<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
	
    public function compras(){
    	return $this->hasOne(Compra::class,'compra_produtos', 'produto_id', 'compra_id');
    }
}
