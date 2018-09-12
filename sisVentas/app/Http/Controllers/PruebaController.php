<?php

namespace Ventas\Http\Controllers;

class PruebaController extends Controller{
    /*
    *show the plication welcome screm to the user
    *
    *@return Response
    */
    public function index()
    {
        return "hola desde controller";
    }
     public function nombre($nombre)
    {
        return "hola mi nombre es".$nombre;
    }
}
