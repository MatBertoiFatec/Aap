<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>

    <style>
       body{
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        text-align: center;
        color: white;
       }
       .box{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 30px;
        border-radius: 30px;
       }
       a{
        text-decoration: none;
        color: white;
        border: 3px solid dodgerblue;
        border-radius: 10px;
        padding: 10px;
       }
       a:hover {
        background-color: dodgerblue;
       }

       .content{
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.slider-wrapper{
    font-size: 40px;
    color: #aaa;
    font-weight: bold;
    text-transform: uppercase;
    display: flex;
    align-items: center;
    justify-content: center;
}

.slider{
    height: 50px;
    padding-left: 15px;
    overflow: hidden;
}

.slider div{
    color: #fff;
    height: 50px;
    margin-bottom: 50px;
    padding: 2px 15px;
    text-align: center;
    box-sizing: border-box;
}

.slider-text1{
    background: #3498db;
    animation: slide 5s linear infinite;
}
.slider-text2{
    background: #27ae60;
}
.slider-text3{
    background: #8E44ad;
}

@keyframes slide{
    0%{margin-top: -250px;}
    5%{margin-top: -200px;}
    33%{margin-top: -200px;}
    38%{margin-top: -100px;}
    66%{margin-top: -100px;}
    71%{margin-top: 0px;}
    100%{margin-top: 0px;}
}
body{
    margin: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to right, black, #575758);
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

section .wave{
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100px;
    background: url(images/wave.png);
    background-size: 1000px 100px;
}

section .wave.wave1{
    animation: animate 30s linear infinite;
    z-index: 1000;
    opacity: 1;
    animation-delay: 0s;
    bottom: 0;
}
section .wave.wave2{
    animation: animate2 15s linear infinite;
    z-index: 999;
    opacity: 0.5;
    animation-delay: -5s;
    bottom: 10px;
}
section .wave.wave3{
    animation: animate3 30s linear infinite;
    z-index: 997;
    opacity: 0.7;
    animation-delay: -2s;
    bottom: 20px;
}
section .wave.wave2{
    animation: animate4 15s linear infinite;
    z-index: 999;
    opacity: 0.5;
    animation-delay: -5s;
    bottom: 10px;
}



@keyframes animate{
    0%{background-position-x: 0;}
    100%{ background-position-x: 1000px;}
}
@keyframes animate2{
    0%{background-position-x: 0;}
    100%{ background-position-x: -1000px;}
}
@keyframes animate3{
    0%{background-position-x: 0;}
    100%{ background-position-x: 1000px;}
}
@keyframes animate4{
    0%{background-position-x: 0;}
    100%{ background-position-x: -1000px;}
}

    </style>
</head>
<body>
    <h1>Entre no site da melhor plataforma de cursos de marketing do Brasil</h1>
    <h2> CW Cursos</h2>

    

    <div class="box">
       <a href="signin.php">Login</a>
       <a href="signup.php">Cadastre-se</a>
        
    </div>

    <div class="content">
        <div class="slider-wrapper">
            Com a CW você terá mais
            <div class="slider">
                <div class="slider-text1">conhecimento</div>
                <div class="slider-text2">sabedoria</div>
                <div class="slider-text3">oportunidade</div>
            </div>
        </div>
    </div>
    <section>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
    </section>


</body>
</html>