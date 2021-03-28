<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
	use HasFactory;
	/**Define que uma compra é formada por vários produtos*/
    public function produtos(){
    	return $this->belongsToMany(Produto::class,'compra_produtos', 'compra_id', 'produto_id')->withPivot('quantidade', 'valor_unidade');
    }
    
}

