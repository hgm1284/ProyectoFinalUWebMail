<!DOCTYPE html>
<html lang="es">
<head>
<title>Nuevo Mensaje</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="/css\bootstrap.min.css">
<link rel="stylesheet" href="/css\template.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/js/application.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<header>
<body>
<div class="container">
  <section class="main row">
    <article class="col-xs-12 col-sm-8 col-md-6 col-lg-12">
      <article class="col-xs-12 col-sm-8 col-md-6 col-lg-3">
        <form>
          <div class="form-group">
            <label for="usr"></label>
            <input type="text" class="form-control input-sm" placeholder="Buscar Correo" id="usr">
          </div>
        </form>
        <button type="button" class="btn btn-default">
          <span class="glyphicon glyphicon-search"></span>Buscar
        </button>
      </article>
    </section>
  </div>
  <div class="page-header">
   <h1>TICOMAIL El correo de Costa Rica</h1>
 </div>
</article>
</header>
<br>

<form name ="crear">
<div class = "container col-sm-2" align="left">
<div class="btn btn-group-vertical">
  <div class="btn-group ">
    <b><input  type="button" class="btn btn-danger"  value="Redactar" data-toggle="modal" data-target="#myModal"/></b><br><br>
    <div class="row">
      </div>
    </div>
    </div>

    <div class="btn-group-vertical">
      <a href="{{ URL::to('home') }}" type="button" id="btn2"class="btn btn-default">Salida</a>
      <a href="{{ URL::to('mail/sent') }}" type="button" id="btn2"class="btn btn-default">Enviados</a>
      <a href="{{ URL::to('mail/draft') }}" type="button" id="btn2"class="btn btn-default"><b>Borrador</b></a>
      <a href="{{ URL::to('logout') }}" type="button" class="btn btn-default">Salir</a>
    </div>
  </div>
</div>
</form>

@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class ="container col-xs-8">
<form action='/mail' method="POST">
{!! csrf_field() !!}
<div class="form-group">
<label for="exampleInputEmail1">Destino:</label>
{!!Form::email('destino',null,['class'=>'form-control','placeholder'=>'Address'])!!}
</div>
<div class="form-group">
<label for="example">Asunto:</label>
{!!Form::text('asunto',null,['class'=>'form-control','placeholder'=>'Subject'])!!}
</div>
<div class="form-group">
<label for="example">Mensaje:</label>
{!!Form::textarea ('mensaje',null,['class'=>'form-control','placeholder'=>'Write the message here'])!!}
</div>
<button type="submit" class="btn btn-danger">Enviar</button>
</form>
</div>
</div>

<footer>
<div class="container">
<section class="main row">
  <article class="col-xs-12 col-sm-8 col-md-4 col-lg-12">
    Nuevo Mensaje
  </article>
</section>
</div>
</footer>

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>