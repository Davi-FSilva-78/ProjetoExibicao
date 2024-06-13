<?php
    include('conexao.php');

    $contatoNome = $_POST=['contatoNome'];
    $contatoEmail = $_POST=['contatoEmail'];
    $contatoCelular = $_POST=['contatoCelular'];
    $conatoText = $_POST=['novText'];
    $contatoFile = $_FILES =['novFile'];


    if(isset($_FILES['novFile'])){ //verificando se o arquivo é null

        //Definindo o tamanho maximo do arquivo, sendo sempre em Bytes. 
        // 1024b = 1kb 
        // 1024k = 1mb
        if($contatoFile['size'] > 2097152)

        //Variavel que vai leva os arquivos para a pasta
        $pasta = "Arquivos/"

        //gerando um nome para salvar o aquivo
        $nomeArquivo = $novFile['name']
        $novoNomeArquivo = uniqid();

        //Vamos pegar o caminho do arquivo para saber qual a extensão do aquivo
        //Strtolower = transforma tudo em letra minuscula
        $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

        if($extensao != "jpg" && $extensao != "png"){
            exit ("[ERRO] arquivo não atende as solicitações especificadas");
        }

        //move_uploaded_file = move os arquivos para uma pasta
        //tmp_name = gera um nome para o servidor armazena temporariamente o arquivo 
        $arquivo = move_uploaded_file($contatoFile["tmp_name"],$pasta.$novoNomeArquivo.$extensao);

        if($arquivo){
            $stmt = $conn->prepare(
                "INSERT INTO `contato`(`contatoNome`, `contatoEmail`, `contatoCelular`, `conatoText`, `contatoFile`)
                 VALUES (:contatoNome, :contatoEmail, :contatoCelular, :conatoText, :contatoFile)"
            );
            $stmt->bindParam(':contatoNome', $contatoNome);
            $stmt->bindParam(':contatoEmail', $contatoEmail);
            $stmt->bindParam(':contatoCelular', $contatoCelular);
            $stmt->bindParam(':conatoText', $conatoText);
            $stmt->bindParam(':contatoFile', $contatoFile);

            $stmt->execute()
        }
        //var_dump($_FILES['novFile']); //Mostra na saída uma informçãoes sobre o elemento
    }
?>