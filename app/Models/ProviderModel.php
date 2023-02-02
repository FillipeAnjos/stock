<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderModel extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'cnpj', 'razao', 'telefone', 'falarcom'];
    
    protected $table = "fornecedores";
}
