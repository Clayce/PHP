<?php

    session_start(); //sempre no início do script

    $categorias= []; //array numérico
    $categorias[]= 'infantil';
    $categorias[]= 'adolescente';
    $categorias[]= 'adulto';

    $nome = $_POST['nome']; //pega info vinda do formulário
    $idade = $_POST['idade'];

    if(empty($nome)) // verifica se a var está vazia
    {
        $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio! Por favor digite seu nome.';
        header('string location:  index.php');
    }

    if(strlen($nome) < 3) // strlen: conta  a quantidade de cacactere na var
    {
        if($nome == "Jó")
        {
            if($idade >= 6 && $idade <= 12 )
            {
                for($i = 0; $i < count($categorias); $i++)
                {
                if($categorias[$i] == 'infantil') 
                    echo $nome . ' compete na categoria infantil';//mostra info na tela, se true
                }
            }

            elseif($idade >= 13 && $idade<= 18)
            {
                for($i = 0; $i < count($categorias); $i++)
                {
                if($categorias[$i] == 'adolescente') 
                    echo $nome.' compete na categoria adolescente';//mostra info na tela, se true
                }
            }

            else
            {
                echo $nome . ' compete na categoria adulto';//mostra info na tela, se true
            }

        }
        echo "Nome não pode ter menos de 3 letras!";
        return;
    }

    if(strlen($nome) > 30) //se nome informado for maior que 30
    {
        echo 'O nome é muito extenso!';
        return;
    }

    if(empty($idade))
    {
        echo 'Idade não pode ser vazio!';
        return;
    }

    if(!is_numeric($idade)) // !is_numeric: se NÃO FOR númerico
    {
        echo 'Valor precisa ser numérico!';
        return;
    }

    // var_dump($nome);
    // var_dump($idade);
    //return 0;
    
    if($idade >= 6 && $idade <= 12 )
    {
        for($i = 0; $i < count($categorias); $i++)
        {
           if($categorias[$i] == 'infantil') 
            echo $nome . ' compete na categoria infantil';//mostra info na tela, se true
        }
    }

    elseif($idade >= 13 && $idade<= 18)
    {
        for($i = 0; $i < count($categorias); $i++)
        {
           if($categorias[$i] == 'adolescente') 
            echo $nome.' compete na categoria adolescente';//mostra info na tela, se true
        }
    }

    else
    {
        echo $nome . ' compete na categoria adulto';//mostra info na tela, se true
    }
    
?>