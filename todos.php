<?php
include 'dados.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="jumbotron.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Dados </title>
</head>
<body>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Primeiro exercício em PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Início</a>
            </li>
          </ul>
        </div>
      </nav>
  
      <main role="main">
  
        <!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
        <div class="jumbotron">
          <div class="container">
            <h1 class="display-3">Exibição dos dados</h1>
            <p>Exibindo todos os dados cadastrados.</p>
          </div>
        </div>
        <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">idade</th>
                <th scope="col">Estilo preferido</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dados as $linha => $item):?>
                    <tr>
                        <th scope="row"><?php echo $item['nome'] ?></th>
                        <td><?php echo $item['idade'] ?></td>
                        <td><?php echo $item['estilo'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
      </main>
</body>
</html>