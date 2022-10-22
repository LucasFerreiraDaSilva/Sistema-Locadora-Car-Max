<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Car</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url(img/fundo.png);
            background-repeat: no-repeat; 
            background-attachment: fixed;
            background-size: 100% 100%; 
            /*background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));*/
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid #5F17E6;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: #5F17E6;
        }
    </style>
</head>
<body>
    <br><h1>Seja Bem Vindo ao Sistema da Locadora MAX CAR!</h1><br><br>
    <h1>A Empresa que ajuda á você, chegar em seu destino. </h1><br><br><br>
    <h2>Buscar e Cadastrar Clientes na MAX CAR</h2><br>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastro Veiculos</a>
        <a href="formulario1.php">Cadastro de Funcionarios</a>
    </div>
</body>
</html>