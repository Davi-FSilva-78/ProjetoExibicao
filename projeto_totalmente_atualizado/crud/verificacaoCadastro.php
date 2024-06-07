<?php 
    include("conexao.php");

    // Capturando os valores do "post" e transformando em variáveis - nomes intuitivos
    $novNome = $_POST['novoNome'] ;
    $novEmail = $_POST['novoEmail'] ;
    $novPass = $_POST['novoPass'] ;
    $novCelular = $_POST['novoCelular'] ;
    $novGenero = $_POST['novoGenero'] ;
    
    $confirmPass = $_POST['confirmSenha'] ;
    
    // Verificação simples para checar se o campo senha e confirme senha estão iguais
    if ($confirmPass == $novPass) {
        // Preparando a consulta SQL usando prepared statements para evitar injeção de SQL
        $stmt = $conn->prepare(
            "INSERT INTO `login`(`loginNome`, `loginEmail`, `loginSenha`, `loginCelular`, `loginGenero`)
            VALUES ('$novNome', '$novEmail', '$novPass', '$novCelular', '$novGenero')"
        );
    
        // Bind dos parâmetros

    
        // Executando a inserção de dados
        if ($stmt->execute()) {
            // Redireciona para a página de login após o cadastro
            header("Location: ../login.php");
            exit(); // Importante para garantir que o script pare de executar após o redirecionamento
        } else {
            echo "Erro ao cadastrar o usuário: " . $stmt->error;
        }
    } else {
        echo "Senhas divergentes"; // Se não tiverem iguais, o sistema exibirá esta mensagem
    }
    
?>  

