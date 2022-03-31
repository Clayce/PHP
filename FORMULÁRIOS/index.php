<?php
    session_start();//inicia sessão http no script
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</title>
</head>
<body>

    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

    <form action="script.php" method="post"> <!-- action: arquivo para enviar os dados-->
        <?php
            $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro']: '' ;
            //? execução do if, : execução do else

            if(!empty($mensagemDeErro))
            {
                echo $mensagemDeErro;
            }
        ?>

        <p>Seu nome: <input type="text" name= "nome"></p>
        <p>Sua idade: <input type="text" name= "idade"></p>
        <p><input type="submit" value="Enviar dados"></p>

    </form>

</body>
</html>