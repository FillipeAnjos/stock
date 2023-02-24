<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $fillable = ['produto', 'descricao', 'tamanho', 'cor', 'quantidade', 'valor', 'garantia', 'marca_id', 'categoria_id', 'fornecedor_id', 'observacao', 'status'];
    
    protected $table = "produtos";
}
