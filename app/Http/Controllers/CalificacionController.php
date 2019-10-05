<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Proveedor;
use App\Models\Producto;



class CalificacionController extends Controller
{
	public function index()
	{
		$cliente = Cliente::find(1);
        //return $cliente->calificaciones;
		return csrf_token();
	}

	public function store()
	{
		$cliente = Cliente::find(1);
        
		$cliente->calificaciones()->create([
			'calificacion' => 4,
		]);
	}

	public function index2()
	{
		$proveedor = Proveedor::find(1);
        return $proveedor->calificaciones;
		//return csrf_token();
	}

	public function store2()
	{
		$proveedor = Proveedor::find(1);
        
		$proveedor->calificaciones()->createMany([
			[
				'calificacion' => 4,
			],
			[
				'calificacion' => 5,
			],
			[
				'calificacion' => 3,
			],
		]);
	}

	public function index3()
	{
		$producto = Producto::find(1);
        return $producto->calificaciones;
		//return csrf_token();
	}

	public function store3()
	{
		$producto = Producto::find(1);
        
		$producto->calificaciones()->createMany([
			[
				'calificacion' => 1,
			],
			[
				'calificacion' => 2,
			],
			[
				'calificacion' => 3,
			],
			[
				'calificacion' => 2,
			],
		]);
	}
}
