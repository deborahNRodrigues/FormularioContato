<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];


$emailDe ="deborahrodriguesdnr@yahoo.com.br" ;

$emailAssunto = "Novo formulário enviado!";
$emailCorpo = "Nome do Usuário: $nome.\n".
              "E-mail do Usuário: $email.\n".
              "Telefone do Usuário: $telefone.\n";

$para ="soprodacorujaowl@gmail.com";
$cabecalho="De: $emailDe\r\n";
$cabecalho.="Reply-to: $email \r\n";
mail($para, $emailAssunto, $emailCorpo,$cabecalho);

header("Location: site.php");
        