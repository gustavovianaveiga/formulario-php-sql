<?php
if (isset($_POST['submit'])) 
{

include_once ("config.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $site = $_POST['site'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone, site) VALUES('$nome', '$email', '$tel', '$site')");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action='form.php' method='POST'>
        <div>
            <input type="text" name='nome' required="required" id="nome">
            <label for="nome">Nome</label>

            <input type="text" name='email' required="required" id="email">
            <label for="email">E-mail</label>

            <input type="tel" name='tel' required="required" id="tel">
            <label for="tel">Telefone</label>

            <input type="text" name='site' required="required" id="site">
            <label for="site">Site da empresa</label>

            <input type="submit" name='submit' value="Enviar" id="enviar">
        </div>
    </form>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        body,
        html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        * {
            margin: 0
        }
        
        div {
            display: flex;
            flex-direction: column;
            width: 310px;
        }
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 500px;
            height: 500px;
            align-items: center;
            border: 3px solid darkviolet;
            border-radius: 10px;
        }
        
        input {
            margin-bottom: 10px;
            width: 300px;
            height: 20px;
            border-radius: 5px;
        }
        
        input:focus {
            outline: none;
        }
        
        label {
            position: relative;
            margin-left: 10px;
            transition: top .1s;
            margin-right: 240px;
            color: darkviolet;
            font-family: 'Bebas Neue', cursive;
            font-size: 18px;
            height: 13px;
        }
        
        label[for='site'] {
            top: -34px;
            width: 95px;
        }
        
        label[for='nome'] {
            top: -34px;
            width: 31px;
        }
        
        label[for='email'] {
            top: -34px;
            width: 39px;
        }
        
        label[for='tel'] {
            top: -34px;
            width: 56px;
        }
        
        #enviar {
            background-color: rgba(148, 0, 211, 0.138);
            border: 1px solid darkviolet;
            color: darkviolet;
            width: 80px;
            align-self: center;
        }
        
        #nome:valid~label[for='nome'],
        #nome:focus~label[for='nome'] {
            background-color: white;
            top: -47px;
        }
        
        #site:focus~label[for='site'],
        #site:valid~label[for='site'] {
            background-color: white;
            top: -47px;
        }
        
        #email:focus~label[for='email'],
        #email:valid~label[for='email'] {
            background-color: white;
            top: -47px;
        }
        
        #tel:focus~label[for='tel'],
        #tel:valid~label[for='tel'] {
            background-color: white;
            top: -47px;
        }
    </style>
</body>

</html>