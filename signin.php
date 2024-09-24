<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="signin.css">
    <title>Sign-in</title>
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
    background-image: url(images/cwlogin.png);
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
    border-bottom: 4px solid #4038a0;
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

 .inputSubmit{
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

.inputSubmit:hover{
    background-color: #272262;
    color: #fff;

}

.justify-center{
    display: flex;
    justify-content: center;

}

hr{
    margin-top: 10%;
    margin-bottom: 10%;
    width: 60%;
}

p{
    color: #272262;
    font-size: 14pt;
    text-align: center;

}
a{
    color: #7a3077;
    font-weight: bold;
    text-decoration: none;
    transition: all .3 ease-out;

}

a:hover{
    color: #272262;

}
    </style>
    
    <a href="home.php">Voltar</a>
    <div class="container">
        <div class="card">
            <h1>Entrar</h1>
            <form action="testeLogin.php" method="POST">
                <div id="msgError"></div>
                <div class="label-float">
                    <input type="text" name="usuario" id="usuario" placeholder=" " required /> 
                    <label id="userLabel" for="usuario">Usuario</label>
                </div>
                <div class="label-float">     
                    <input type="password" name="senha" id="senha" placeholder=" " required /> 
                    <label id="senhaLabel" for="senha">Senha</label>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </div>
                <div class="justify-center">
                    <input class="inputSubmit" type="submit" name="submit" value="Entrar">
                </div>
            </form>
            <p>Não tem uma conta? <a href="signup.php">Cadastre-se</a></p>
        </div>
    </div>
</body>
</html>
