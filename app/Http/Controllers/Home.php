<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;

class Home extends Controller
{

/*
Se crea una función index() dentro del controlador Home,
la cual se encarda de seleccionar todos los correos de la DB
y pasarlos a la vista home.
*/
public function index()
{
$mails = DB::select('select * from mails');
return view('home', ['mails' => $mails]);
}

}