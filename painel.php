<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/painel.css">
    <title>Painel</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Painel de Usuarios</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="button-sair">
            <a href="index.php" class="btn btn-danger me-5">Sair</a> <!-- comando sair para retornar a pagima de login do usuario no sistema -->
        </div>
    </nav>
    <br>
    <?php
        //echo "<h1>Bem vindo <u>Usuario</u></h1>"; tag de bem vindo ao usuario ou admin no sistema
    ?>
    <table class="table">
     <thead>
     <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Celular</th>
      <th scope="col">Assunto</th>
      <th scope="col">Arquivo</th>
      
    </tr>
    </thead>
    <tbody>
     <?php
        //while($user_data = mysql_fetch_assoc($resultado)) codigo de preenchimento automatico do painel de usuarios, apenas trocar as variaveis...
        //{
            //echo "<tr>"; 
            //echo "<td>".$user_data['id']. "<td>";
        //}
      ?>
    </tbody>
    </table>
    </div>
</body>
</html>