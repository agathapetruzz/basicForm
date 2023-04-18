<?php

if(isset($_POST['submit']))
{
    //print_r('NOME: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('EMAIL: ' . $_POST['email']);
   // print_r('<br>');
    //print_r('TELEFONE: ' . $_POST['telefone']);
    //print_r('<br>');
    //print_r('DATA DE NASCIMENTO: ' . $_POST['data']);

    include_once('conexao.php');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data'];

    $result = mysqli_query($conexao, "INSERT INTO formulario(nome,email,telefone,data) 
    VALUES ('$nome','$email','$telefone','$data')");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Formulario | </title>

    <style>

        body{
            text-align: center;
            background-color: paleturquoise;
            
        }

        h1{
            font-family: monospace;
        }

        fieldset{
            margin-left: 40%;
            margin-bottom: 5%;
            margin-right: 40%;
            background-color: skyblue;
            font-family: monospace;
        }

        legend{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

    
    </style>
</head>
<body>
    <h1><< FORMULÁRIO DE CLIENTE >></h1>
    <div class="">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend>PREENCHA O FORMULARIO</legend>
                <br>
                <div class="InputBox">
                    <label for="nome" class="LabelInput">NOME COMPLETO </label>
                <br>
                    <input type="text" name="nome" id="nome" class="inputUser" placeholder="Digite seu nome" required>
                </div>
            <br><br>
                <div class="InputBox">
                    <label for="email" class="LabelInput">EMAIL</label>
                <br>
                    <input type="text" name="email" id="email" class="inputUser" placeholder="nome@email.com.br" required>   
                </div>
            <br><br>
                <div class="InputBox">
                    <label for="telefone" class="LabelInput">TELEFONE</label>
            <br>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" placeholder="(xx)xxxx-xxxx" required>
                </div>
            <br>
            <br>
                <div class="InputBox">
                    <label for="data">DATA DE NASCIMENTO</label>
                    <input type="date" name="data" id="data" required>
                </div>
            <br>
                    <input type="submit" id="submit" name="submit">
                    <input type="reset" id="limpar" name="limpar">
            <br>
            </fieldset>
        </form>
    </div>
</body>
</html>