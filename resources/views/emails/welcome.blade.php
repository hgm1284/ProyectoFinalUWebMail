<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Welcome</h2>

<div>
   {!! $name !!} Welcome to TicoMail!
    Your username is {!! $email !!} !
    <a href="http://localhost:8000/mail/verificar/{!!$token!!}">Confirm your new account please!</a>
</div>

</body>
</html>
