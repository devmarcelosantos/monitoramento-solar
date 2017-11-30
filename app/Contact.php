<?php

namespace Solar;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'customer_id', 'ddd', 'phone', 'email'
    ];
}