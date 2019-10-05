<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono'
    ];

    public function productos()
    {
        return $this->hasMany('App\Models\Producto');
    }

    public function caracteristicas()
    {
        return $this->hasManyThrough('App\Models\Caracteristica', 'App\Models\Producto');
    }
    public function calificaciones()
    {
        return $this->morphMany('App\Models\Calificacion', 'scoreable');
    }
}
