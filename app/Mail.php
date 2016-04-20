<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/*
Se crea un modelo Mail, éste se encarga de enviar y recibir datos de
la base de datos y los envía al controlador.
*/
class Mail extends Model
{
protected $table = 'mails';
protected $fillable = [ 'destino', 'asunto', 'fecha', 'mensaje'];
public $timestamps = false;
}