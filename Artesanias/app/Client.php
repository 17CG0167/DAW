<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    // En caso de usar un diferente "id" especificarlo
    //protected $primaryKey = "idCliente"
    protected $fillable = [
        'id_user', 'address', 'city', 'country'
    ];
}
