<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Cartao: ' . $_POST['senha']);
        // print_r('<br>');
        

        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];
       


        $result = mysqli_query($conexao, "INSERT INTO usuarios1(email,senha)
         VALUES ('$email','$senha')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | MAX CAR</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(95,23 , 230), rgb(133, 23, 230));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 2px solid #5F17E6;
        }
        legend{
            border: 1px solid #5F17E6;
            padding: 10px;
            text-align: center;
            background-color: #5F17E6;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -14px;
            font-size: 12px;
            color: #5F17E6;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(95,23 , 230), rgb(95,23 , 230));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(133, 23, 230), rgb(133, 23, 230));
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario1.php" method="POST">
            <fieldset>
                <legend><b>Acesso Funcionario</b></legend>
                    <br><b>
                    <div class="inputBox">
                            <input type="text" name="email" id="email" class="inputUser" required>
                            <label for="email" class="labelInput">Email</label>
                        </div><br>

                        <div class="inputBox">
                            <input type="password" name="senha" id="senha" class="inputUser" required>
                            <label for="senha" class="labelInput">Senha</label>
                        </div><br>
                        </fieldset>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>