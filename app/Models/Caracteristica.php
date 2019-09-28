<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table = 'caracteristicas';
    
    protected $fillable = [
        'producto_id',
        'caracteristicas'
    ];

    public function producto()
    {
        return $this->belongsTo('App\Models\Producto');
    }
}
