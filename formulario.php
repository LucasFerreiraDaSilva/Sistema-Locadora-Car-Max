<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['Nome']);
        // print_r('<br>');
        // print_r('Cartao: ' . $_POST['Cartao']);
        // print_r('<br>');
        // print_r('CPF: ' . $_POST['CPF']);
        // print_r('<br>');
        // print_r('RG: ' . $_POST['RG']);
        // print_r('<br>');
        // print_r('Veiculo: ' . $_POST['Veiculo']);
        // print_r('<br>');
        // print_r('Retirada: ' . $_POST['Retirada']);
        // print_r('<br>');
        // print_r('Devolucao: ' . $_POST['Devolucao']);
        // print_r('<br>');

        include_once('config.php');

        $nome = $_POST['nome'];
        $telefone =$_POST['telefone'];
        $endereco =$_POST['endereco'];
        $cpf =$_POST['cpf'];
        $rg =$_POST['rg'];
        $veiculo =$_POST['veiculo'];
        $valor = $_POST['valor'];
        $retirada =$_POST['retirada'];
        $devolucao =$_POST['devolucao'];


        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,telefone,endereco,cpf,rg,veiculo,valor,retirada,devolucao)
         VALUES ('$nome','$telefone','$endereco','$cpf','$rg','$veiculo','$valor','$retirada','$devolucao')");

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
            color: #FF9933;
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
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastrar Veiculo</b></legend>
                    <br><b>
                        <div class="inputBox">
                            <input type="text" name="nome" id="nome" class="inputUser" required>
                            <label for="nome" class="labelInput">Nome Completo</label>
                            </div><br>

                        <div class="inputBox">
                            <input type="number" name="telefone" id="telefone" class="inputUser" required>
                            <label for="telefone" class="labelInput">Telefone</label>
                        </div><br>

                        <div class="inputBox">
                            <input type="text" name="endereco" id="endereco" class="inputUser" required>
                            <label for="endereco" class="labelInput">Endereço</label>
                        </div><br>

                        <div class="inputBox">
                            <input type="number" name="cpf" id="cpf" class="inputUser" required>
                            <label for="cpf" class="labelInput">CPF</label>
                        </div><br>

                        <div class="inputBox">
                            <input type="number" name="rg" id="rg" class="inputUser" required>
                            <label for="rg" class="labelInput">RG</label>
                        </div><br>

                        <div class="inputBox">
                            <input type="text" name="veiculo" id="veiculo" class="inputUser" required>
                            <label for="veiculo" class="labelInput">Veículo Alugado</label>
                        </div><br>

                        <div class="inputBox">
                            <input type="number" name="valor" id="valor" class="inputUser" required>
                            <label for="valor" class="labelInput">Valor do aluguel</label>
                        </div><br>

                        <div class="inputBox">
                            <input type="date" name="retirada" id="retirada" required>
                            <label for="retirada">Data de Retirada</label>
                        </div><br>

                        <div class="inputBox">
                            <input type="date" name="devolucao" id="devolucao" required>
                            <label for="devolucao">Data de Devolucão</label>
                        </div><br>
                    </b><br>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>