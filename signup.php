<?php

if(isset($_POST['submit']))
{
    include_once('config.php');

    $nome = ($_POST['nome']);
    $usuario = ($_POST['usuario']);
    $senha = ($_POST['senha']);
    $confisenha = ($_POST['confirmSenha']);

    // Verificação se as senhas coincidem
    if ($senha !== $confisenha) {
        echo "As senhas não coincidem!";
        exit; // Termina o script
    }

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,usuario,senha,confsenha) VALUES ('$nome','$usuario','$senha','$confisenha')");
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="signup.css">
    <title>Sign-up</title>
</head>
<body>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");

* {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}

body{
    background-image: url(images/cadastro99.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;

}

.container{
    display: flex;
    justify-content: center;
    width: 100%;
    margin-top: 100px;
}

.card{
    background-color: #ffffff80;
    padding: 30px;
    border-radius: 4%;
    box-shadow: 3px 3px 1px 0px #00000060;
    width: 300px;

}

h1{
    text-align: center;
    margin-bottom: 20px;
    color: #272262;

}

.label-float input{
   width: 100%;
   padding: 5px 5px;
   display: inline-block;
   border: 0;
   border-bottom: 2px solid #272262;
   background-color: transparent;
   outline: none;
   min-width: 180px;
   font-size: 16px;
   transition: all .3s ease-out;
   border-radius: 0;
}

.label-float{
    position: relative;
    padding-top: 13px;
    margin-top: 5%;
    margin-bottom: 5%;

}

.label-float input:focus{
    border-bottom: 2px solid #4038a0;
}
.label-float label{
    color: #272262;
    pointer-events: none;
    position: absolute;
    top: 0;
    left: 0;
    margin-top: 13px;
    transition: all .3s ease-out;
}

.label-float input:focus + label,
.label-float input:valid + label{
    font-size: 13px;
    margin-top: 0;
    color: #4038a0;
     
}

button{
    background-color: transparent;
    border-color: #272262;
    color: #272262;
    padding: 7px;
    font-weight: bold;
    font-size: 12pt;
    margin-top: 20px;
    border-radius: 4px;
    cursor: pointer;
    outline: none;
    transition: all .4 ease-out;

}

button:hover{
    background-color: #272262;
    color: #fff;

}

.justify-center{
    display: flex;
    justify-content: center;

}

.fa-eye{
    position: absolute;
    top: 13px;
    right: 10px;
    cursor: pointer;
    color: #272262;
}

#msgError{
    text-align: center;
    color: #ff0000;
    background-color: #ffbbbb;
    padding: 10px;
    border-radius: 4px;
    display: none;
}

#msgSuccess{
    text-align: center;
    color: #00bb00;
    background-color: #bbffbe;
    padding: 10px;
    border-radius: 4px;
    display: none;
}
</style>
<a href="home.php">Voltar</a>
    <div class='container'>
        <form action="signup.php" method="POST"> 
            <div class="card">
                <h1>Cadastrar</h1>

                <div id="msgError"></div>
                <div id="msgSuccess"></div>

                <div class="label-float">
                    <input type="text" name="nome" id="nome" placeholder=" " required /> 
                    <label id="labelNome" for="nome">Nome</label>
                </div>

                <div class="label-float">
                    <input type="text" name="usuario" id="usuario" placeholder=" " required /> 
                    <label id="labelUsuario" for="usuario">Usuario</label>
                </div>

                <div class="label-float">
                    <input type="password" name="senha" id="senha" placeholder=" " required /> 
                    <label id="labelSenha" for="senha">Senha</label>
                    <i id="verSenha" class="fa fa-eye" aria-hidden="true"></i>
                </div>

                <div class="label-float">
                    <input type="password" name="confirmSenha" id="confirmSenha" placeholder=" " required /> 
                    <label id="labelConfirmSenha" for="confirmSenha">Confirmar Senha</label>
                    <i id="verConfirmSenha" class="fa fa-eye" aria-hidden="true"></i>
                </div>

                <div class="justify-center">
                    <button type="submit" name="submit">Cadastrar</button> 
                </div>
            </div>
        </form> 
    </div>
</body>
</html>

