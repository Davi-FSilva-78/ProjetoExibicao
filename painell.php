<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/painel.css">
    <title>Painel</title>
</head>
<?php

include("crud/conexao.php"); ?>

   <?php
       $stmt = $conn->prepare("select * from contato");
       $stmt->execute(); 
   ?>
   
   <table class="table table-striped">
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
           while($row = $stmt->fetch()) {
               echo "<tr>";
               echo "<td> $row[idContato] </td>";                             
                   echo "<td> $row[contatoNome] </td>";
                   echo "<td> $row[contatoEmail] </td>";
                   echo "<td> $row[contatoNumero] </td>";
                   echo "<td> $row[contatoAssunto] </td>";
                   echo "<td> $row[contatoFile] </td>";
               echo "</tr>";
           }
       ?>
     </tbody>
   </table>
</body>