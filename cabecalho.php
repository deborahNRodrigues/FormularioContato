<?php
include'formContato.php';
?>
<html>
    <head>
        <title>Formulário de Contato</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="titulo-contato">
            <h1>Por favor informe seus dados </h1>
            <h2>Para receber promoções</h2>
        </div>
        <div class="formulario-contato">
            <form id="formulario-contato" method="post" action="<?= $_SERVER["PHP_SELF"]; ?>">
                <input name="nome"  type="text"class="formulario-controle" placeholder="Nome Completo" value="<?= $nome ?>"><br><span class="error"><?= $nome_error ?></span><br>

                <input name="email"  type="text"class="formulario-controle" placeholder="E-mail" value="<?= $email ?>"><br><span class="error"><?= $email_error ?></span><br>

                <input name="telefone"  type="text"class="formulario-controle" placeholder="Whatsapp (91)9999-9999" value="<?= $telefone ?>"><br> <span class="error"><?= $telefone_error ?></span><br>

                <input name="submit"  type="submit" class="formulario-controle submit" value="Enviar">
            </form>
        </div>

    </body>
</html>