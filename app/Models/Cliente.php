<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    
    protected $fillable = [
        'nombre',
        'telefono'
    ];

    public function facturas()
    {
        return $this->hasMany('App\Models\Factura');
    }

    public function ubicacion()
    {
        return $this->hasOne('App\Models\Ubicacion');
    }
}
