

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fripirie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <h1>Cadastrar Novo Usuário</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="nome" class="label-control">Nome do Usuário</label>
            </div>
            <div class="col-10">
                <input class="form-control" type="text" id="nome" name="nome"
                placeholder="Insira o nome completo" required />
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="email" class="label-control">E-mail do Usuário</label>
            </div>
            <div class="col-10">
                <input class="form-control" type="email" id="email" name="email"
                placeholder="Informe um e-mail valido" required />
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="senha" class="label-control">Senha de Acesso</label>
            </div>
            <div class="col-4">
                <input class="form-control" type="password" id="senha" name="senha"
                placeholder="Informe a senha desejada" required />
            </div>
            <div class="col-2">
                <label for="nivel" class="label-control">Nível de Acesso</label>
            </div>
            <div class="col-4">
                <input class="form-control" type="number" id="nivel" name="nivel"
                required />
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>

