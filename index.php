<?php
    //se existir o arquivo conexao.php ele inclui por obrigatoriedade.
    (file_exists('conexao.php')?require_once ('conexao.php'): '');

    $sql = "select * from users";
    $consulta = mysqli_query($con, $sql);
    $numLinhas = mysqli_num_rows($consulta);
    if ($numLinhas == 0){
        echo "Tabela Vazia";
    } 
    else{

    ?>

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
    <h1>Fripirie</h1>
        <div class="container">
    <?php

        echo "<h1>Exibindo usuarios</h1>";
        echo "<table class='table table-striped table-hover table-responsive w-100'>";
        echo "<thead><th>Nome</th>
                     <th>E-mail</th>
                     <th>Nível de Acesso</th>
              </thead>";
        foreach($consulta as $linha){
            echo "<tr><td>".$linha['nome']."</td>
                      <td>".$linha['email']."</td>
                      <td>".$linha['nivel']."</td>
                  </tr>";
        }
    }
    ?>
    </table>
    <form action="cadastrar.php" method="post">
        <input type="submit" value="Cadastrar Novo Usuario" 
        name="acao" class="btn btn-outline-success">
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>

