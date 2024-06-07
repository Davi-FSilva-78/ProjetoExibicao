<?php 

    include("conexao.php");
     
    session_start();

    //capturando os valores do "post" e transformando em variáveis
    $loginEmail = $_POST['loginEmail']; 
    $loginSenha = $_POST['loginSenha'];

    sha1($loginSeha);// metodo nativo do php para criptografar valores de senha

    $stmt = $conn->prepare(//código sql para procurar as variaveis no banco 
        "select * from login where loginEmail='$loginEmail' and loginSenha =". $loginSenha 
    ); 

    $stmt->execute();//funcao ara executar o select no banco

    while($row = $stmt->fetch()) {
        
    //validar se os campos inseridos nas variáveis loginEmail e loginSenha estão no banco de dados
    if(strcmp($loginEmail,$row['loginEmail'] )==0 && strcmp($loginSenha,$row['loginSenha'] )==0) {
    $_SESSION['acesso'] = true;
    break;        
    }
    }
    if($_SESSION['acesso'] == true){
    header("location:../index.php");
    }
    else{
        unset($_SESSION['acesso']);
        session_destroy();
        header("Location:../login.php");        
    } 
?>