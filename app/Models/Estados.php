<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{

    protected $fillable = [
        'id',
        'nome',
        'uf',
        'status',
    ];

}
