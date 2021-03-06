<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use App\email;
use Session;
use Illuminate\Routing\Controller;
use DB;

class MailController extends Controller
{

/*
Función que permite mostrar los datos del correo en la vista edit.
*/
public function edit($id)
{
$email=email::findOrFail($id);
return view('mail/edit',compact('email'));
}

/*
Función que permite eliminar correos de la base de datos.
*/
public function destroy($id)
{
$email=email::find($id);
$email->delete();
return Redirect::to('home')->with('status', '¡Mensaje eliminado con éxito!');
}

/*
Función que actualiza un solo correo por medio de su id y lo guarda
en la base de datos.
*/
public function update(Request $request, $id)
{
$email=email::find($id);
$email->destino=$request->destino;
$email->asunto=$request->asunto;
$email->mensaje=$request->mensaje;
$email->save();
return Redirect::to('home')->with('status', '¡Mensaje actualizado con éxito!');
}

public function create()
{
return view('mail/write');
}

/*
Función para solo ver el contenido del correo.
*/
public function show($id)
{
$email=email::findOrFail($id);
return view('mail/see',compact('email'));
}

/*
Función para mostrar los correos en estado de draft(estado=2)
*/
public function draft()
{
$mails = DB::select('select * from mails where estado = 2');
return view('mail/draft', ['mails' => $mails]);
}

/*
Función para crear un nuevo correo, ennviarlo y guardarlo en la base de datos.
*/
public function store(Request $request)
{
$mail = new email;
$mail->destino=$request->destino;
$mail->asunto=$request->asunto;
$mail->mensaje=$request->mensaje;
$mail->save();
return Redirect::to('home')->with('status', '¡Mensaje Guardado!');
}

/*
Función para verificar el correo, si hay datos y si el status es 1.
*/
public function verificar($token){

$user = DB::table('users')
->where('token', '=', $token)
->get();

if ((empty($user))) {
return Redirect::to('/auth/login')->with('status', '¡Lo siento mucho, no ha verificado su cuenta!');
}
else
{
DB::table('users')
->where('token', $token)
->update(['status' => 1]);
return Redirect::to('home')->with('status', '¡Bienvenido a TicoMail!');
}

}

}