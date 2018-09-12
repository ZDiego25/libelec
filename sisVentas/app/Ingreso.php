<?php

namespace Ventas;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
     protected $table='ingreso';

    protected $primaryKey = 'idingreso';

    public $timestamps = false;


    protected $fillable =[
    	'idproveedor',
    	'tipo_comprabante',
    	'serie_comprobante',
    	'num_comprobante',
    	'fecha_hora',
    	'impuesto',
    	'estado'

    ];

    protected $guarded = [
    	
    ];
}
