<!DOCTYPE html>
<html>
<head>
<title>Registro de Usuarios</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="/css\bootstrap.min.css">
<link rel="stylesheet" href="/css\template.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<header>
<body>
<div class="container">
<section class="main row">
  <div  class = "fila"> 
    <div  class = "col-xs-12 col-sm-8 col-md-4 col-lg-3 col-md-offset-4"> 
      <hr>
    </div>
  </div>
</section>
</div>
<div class="container">
<section class="main row">
  <article class="col-xs-12 col-sm-8 col-md-4 col-lg-3 col-md-offset-4">
    <div  class = "página-header"> 
      <h1><b>TICOMAIL</b></h1><h2>El correo de los ticos</h2> 
    </div>
  </section>
</div>
</hr>
</header>
<br>
<!-- resources/views/auth/register.blade.php -->

@if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

<div class="container">
<section class="main row">
<div class="col-xs-12 col-sm-8 col-md-4 col-lg-3 col-md-offset-4"> 
    <h3>Crea tu cuenta de TICOMAIL</h3>
</section>
<article class="col-xs-12 col-sm-8 col-md-4 col-lg-3 col-md-offset-4">

<form method="POST" action="/auth/register">
{!! csrf_field() !!}

<div>
  Name
  <p><input type="text" name="name" value="{{ old('name') }}"></p>
</div>

<div>
  LastName
  <p><input type="text" name="lastname" value="{{ old('lastname') }}"></p>
</div>

<div>
  Email
  <p><input type="email" name="email" value="{{ old('email') }}"></p>
</div>

<div>
  Password
  <p><input type="password" name="password"></p>
</div>

<div>
  Password Confirmation
  <p><input type="password" name="password_confirmation"></p>
</div>

<div>
  <button  type="submit" class="btn btn-default" >Register</button>
  <a href="login"> <button type="button" class="btn btn-default" >Cancel</button></a>
</div>
    
</article>
</div>
</div>
</form>
<hr>
<footer>
<div class="container">
<section class="main row">
<article class="col-xs-12 col-sm-8 col-md-4 col-lg-12">
  Bienvenido al correo de los costarricenses
</article>
</section>
</div>
</footer> 

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/application.js" type="text/javascript"></script>
</body>
</html> 