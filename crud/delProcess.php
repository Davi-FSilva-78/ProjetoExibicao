<?php
include("conexao.php");

$id=$_GET['idContato'];

$sql1 = "select contatoFile from contato where idContato=$id";
        $excluir = $conn->prepare($sql1);
        $excluir->execute();
        $deleteImage = $excluir->fetchColumn();

    if($excluir->execute()){
        if($deleteImage && file_exists(__DIR__.'/' . $deleteImage)){
        unlink($deleteImage);
        }
    }
function dContato($conn, $id){
    

    $sql = "delete from contato where idContato = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute([$id])){
        
        header("Location: ../painel.php");
        die ("Contato excluído com sucesso.");
    }else{
        echo "Erro ao tentar excluir";
    }
}

    dContato($conn, $id); //variáveis a serem usadas na função
       

       
?>