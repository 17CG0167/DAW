<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellItem extends Model
{
    protected $fillable = [
        'id_sell', 'id_product', 'price','quantity'
    ];
}
