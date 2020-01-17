<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div id="app">
    <div id = "titulopagina">
        <h1> Editar Dados de Pessoa </h1>             
    </div>

    <br>

    <formulario-pessoa-edicao :pessoa="{{$pessoa}}"></formulario-pessoa-edicao>

</div>

    <script src="/js/app.js"></script>
</body>
</html>