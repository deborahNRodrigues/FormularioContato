<?php

/*$nome = $_POST['nome'];
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
mail($para, $emailAssunto, $emailCorpo,$cabecalho);*/

//define as variaveis e set as variaveis vazias
//print_r($_POST);
//die();
$nome_error = $email_error = $telefone_error ="";
$nome = $email = $telefone = "";

//FUNÇÃO PARA TRATAR OS DADOS RECEBIDOS
  function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        
    }

//envio do formulário com o metodo post

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['nome'])){
        $nome_error = "É preciso informar um nome!";
        
    } else {
        $nome = test_input($_POST['nome']);
        //checa se o nome posssui letras e espaços
        if(!preg_match("/^[a-zA-Z]*$/", $nome)){
            $nome_error ="Somente letras e espaços em branco são permitidos";
            
        }
    }
     if(empty($_POST['email'])){
        $email_error = "É preciso informar um email!";
        
    } else {
        $email = test_input($_POST['email']);
        //checa o formato do e-mail
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $email_error ="Esse formato não é permitido!";
            
        }
    }
    
     if(empty($_POST['telefone'])){
        $telefone_error = "É preciso informar um telefone!!";
        
    } else {
        $telefone = test_input($_POST['telefone']);
        //checa se o  formato do telefone
        if(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s]{0,2}?\d{3}[\s-]?\d{4}$/i", $telefone)){
            $telefone_error ="Somente letras e espaços em branco são permitidos";
            
        }
    }
    
    header("Location:index.php");
  
}


        