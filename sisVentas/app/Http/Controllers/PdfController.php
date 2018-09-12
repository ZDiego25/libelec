<?php

namespace Ventas\Http\Controllers;
  
use Illuminate\Http\Request;
use sisVentas\Http\Requests;

use Ventas\Categoria;
use Illuminate\Support\Facades\Redirect;
use Ventas\Http\Requests\CategoriaFormRequest;
use DB;
use PDF;

class PdfController extends Controller
{
    
         public function __construct()
    {

    }

    public function generar()
    {
      $categorias= \DB::table('categoria')
      ->select('nombre','descripcion')
      ->where('condicion','=','1')
      ->get();
      $view = \View::make('almacen.categoria.reporte',compact('categorias'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      return $pdf->stream('informe'.'.pdf');
    }
}
