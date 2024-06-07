<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
<div class="container-img">
        <div class="form">          
            <form action="crud/verificacaoCadastro.php" method="post" enctype = "multipart/form-data">
                <div form="form-header">
                <div class="input-group">
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="novoEmail" placeholder="Digite seu email" required>
                    </div>
                   
                    <div class="input-box">
                        <label for="tetx">Assunto</label>
                        <textarea id="assunto" name="novoAssunto" ></textarea>
                    </div>

                    <div class="input-box">
                        <label for="img"> Arquivo </label>
                        <input type="file" id="file" name="novoFile">
                    </div>

                <div class="btn-cadastro">
                    <button><a href="#">Enviar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>