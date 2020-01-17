<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <div id="titulopagina">
        <h1> Pessoas </h1>
    </div>

    <br>

    <form>
        <div class="form-row align-items-center">
            <div class="col-md-3">
                <label for="validationnomeCompleto"> Nome Completo </label>
                <label class="sr-only" for="inlineFormInput">Nome Completo</label>
                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Nome Completo">
            </div>
            <div class="col-md-3">
                <label> Cpf</label>
                <label class="sr-only" for="inlineFormInput">Cpf</label>
                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Cpf">
            </div>
            <div class="col-auto">
                <br>
                <button type="submit" class="btn btn-primary mb-2">Pesquisar</button>
                <button type="button" class="btn btn-primary mb-2" onclick="window.location='/pessoas/create'">Cadastrar</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered col-md-7">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome Completo</th>
                <th scope="col">E-mail</th>
                <th scope="col">Cpf</th>
                <th scope="col">Idade</th>
                <th scope="col">Qtd.Telefones</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pessoa as $pessoa)
            <tr>
                <th scope="row">{{ $pessoa->id }}</th>
                <td>{{$pessoa->nome_completo}}</td>
                <td>{{$pessoa->email }}</td>
                <td>{{$pessoa->cpf}}</td>
                <td>
                    {{ date('Y') - Carbon\Carbon::parse($pessoa->data_nascimento)->format('Y') }}
                </td>
                <td></td>
                <td>
                    <a href="/pessoas/{{$pessoa->id}}/edit" class="actions edit">
                        <span class="glyphicon glyphicon-pencil"> </span>
                    </a>
  
                    <form action="/pessoas/{{$pessoa->id}}" method="DELETE">
                        <button type="submit">
                            <span class="glyphicon glyphicon-trash"></span>
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>