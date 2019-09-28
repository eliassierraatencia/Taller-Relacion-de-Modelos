<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorConsultaController extends Controller
{
    public function index()
    {
    	$proveedores = Proveedor::with('caracteristicas')->get();
    	return $proveedores;
    }

}
