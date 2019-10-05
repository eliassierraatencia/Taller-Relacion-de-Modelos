<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Ubicacion;

class ClienteController extends Controller
{

    public function index()
    {
      $cliente = Cliente::with('ubicacion')->first();
      return $cliente;
      return csrf_token();
    }

    public function store(Request $request)
    {
      $cliente = new Cliente();

      $cliente->nombre = 'Elias Sierra';
      $cliente->telefono = '2745674';

      $cliente->save();

      $ubicacion = new Ubicacion();

      $ubicacion->direccion = 'Carrera 20 # 45-76';
      $ubicacion->barrio = 'La Ford';
      $ubicacion->ciudad = 'Sincelejo';

      $cliente->ubicacion()->save($ubicacion);

      return 'Se guardo correctamente';
    }
    
}
