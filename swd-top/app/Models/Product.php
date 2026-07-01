<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Tabella
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price'
    ];
}
