<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body class="welcome">
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 font white">
                    <h1 class="text-center">Creá<span class="block font cursive">¡Buenos Aires!</span></h1>
                    <h4 class="text-center">Bienvenido a la primer plataforma co-participativa de Argentina.<br/>Ahora, más que nunca, vos podés elegir, cómo va a ser tu ciudad.</h4>
                    <div class="text-center">
                        <a class="boton" href="/login">Ciudadano</a>
                        <a class="boton" href="/login/ciudad">Ciudad</a>
                        <a class="boton" href="/login/gobernante">Gobernante</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>
