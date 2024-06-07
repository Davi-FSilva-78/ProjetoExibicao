<?php
    include("conexao.php");

    $novEmail = $_POST['novoEmail'];
    $novAssunto = $_POST['novoAssunto'];
    $novArquivo = $_FILES['novoFile'];

    if(isset($_FILES['novoFile'])){
        $novArquivo = "img/".$_Files['novoFile'];
    }else{
        $novArquivo = "";
    }

    $stmt = $conn->prepare(
        "INSERT INTO `contato`(`contatoEmail`, `contatoAssunto`, `contatoFile`)
        VALUES ('$novEmail', '$novAssunto', '$novArquivo')");

?>