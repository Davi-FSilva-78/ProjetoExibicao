<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/ud.css">
</head>
<body>

<script> //Função Javascript para redirecionar de volta ao painel
    function redirecionar(){
    setTimeout(function(){
        window.location.href='../painel.php'; //local para qual o usuário será redirecionado
    },5000); //tempo até o redirecionamento em milissegundos
    }
    </script>
    
<?php
include("conexao.php");



if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['id']) && isset($_POST['action'] ) ) { //verifica se o método chamado foi post, se temos recebemos o ID e se o botão foi pressionado
    
    $action = $_POST['action'];
    $id = $_POST['id'];

    if($action=='del'){  //verifica qual o valor(value) do botão pressionado. Se 'del', função deletarContato(dContato)
        dContato($conn, $id); //variáveis a serem usadas na função
       echo "<script> window.onload = redirecionar; </script>"; //utiliza a função di js para redirecionar

    } elseif($action=='edit'){ //se o value for 'edit', redireciona para uma página de edição
    header("Location: ../editarContato.php?idContato=".$id); //envia o usuário para a pagina de edição de contato e oi valor da de $id
    exit();

}



}

?>

</body>
</html>
