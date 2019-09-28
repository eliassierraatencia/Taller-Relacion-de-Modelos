<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Factura;
use App\Models\Producto;

class FacturaController extends Controller
{
    public function index ()
    {
      $cliente = Cliente::with('facturas')->first();
      return $cliente;
    }

    public function store (Request $request)
    {
         $cliente = Cliente::find(1);

         $cliente->facturas()->saveMany([
             new Factura([
                'fecha' => '2019-09-1'
             ]),
             new Factura([
                'fecha' => '2019-08-14'
            ]),
            new Factura([
                'fecha' => '2019-09-24'
            ]),
         ]);

         return "Facturas guardadas con exito";
    }

    public function storeAttach(Request $request)
    {
        $factura = Factura::find(1);
       
        $factura->productos()->attach([1,2]);
        //$factura->productos()->attach([3]);

        return "Se guardaron los 2 productos a la factura 1";
    }

    public function storeSync(Request $request)
    {
        $factura = Factura::find(2);
       
        $factura->productos()->sync([1,2]);
        //$factura->productos()->sync([3]);

        return "Se guardaron los 2 productos a la factura 2";
    }
}
