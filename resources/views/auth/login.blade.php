<!DOCTYPE html>
<html lang="es">
<head>
  <title>Inicio de Sesión</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="/css\bootstrap.min.css">
  <link rel="stylesheet" href="/css\template.css">
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

  <div class="container">
    <section class="main row">
      <article class="col-xs-12 col-sm-8 col-md-4 col-lg-3 col-md-offset-4">
        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

        <form method= "POST" action="/auth/login">
            {!! csrf_field() !!}
          <div class="form-group">
            <form class="form-inline">
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email" autofocus required>
              </div>
              <div class="form-group">
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword3" placeholder="Password" required>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Mantener la sesión iniciada
                </label>
              </div>
              <hr>
              <button type="submit" class="btn btn-default" id="boton-guardar">Ingresar</button>
              <a href="Registro.html"><button type="button" class="btn btn-default" id="boton-guardar">Registrarse</button><br></a>
              <hr/>
            </form>
          </section>
        </article>
      </div>
    </form>
  </div>
</body>

<footer>
  <div class="container">
    <section class="main row">
      <article class="col-xs-12 col-sm-8 col-md-4 col-lg-12">
        Bienvenido al correo de los costarricenses
      </article>
    </section>
  </div>
</footer>
<script src="/js/jquery.js"></script>
<script src="/js/application.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html> 