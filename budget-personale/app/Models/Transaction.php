<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    protected $fillable = [
        'amount',
        'description',
        'date',
        'category_id',
        'user_id',
    ];
}
