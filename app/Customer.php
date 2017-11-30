<?php

namespace Solar;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'cpf', 'cnpj', 'cep', 'complement', 'number'
    ];

    
}