<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Aluno</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #000; /* Define a cor padrão do texto como preto */
}

header {
    background-color: #003399;
    color: #fff; /* Cor do texto do header continua branca */
    display: flex;
    align-items: center;
    padding: 10px 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

header .logo {
    margin-right: auto; /* Empurra a logo para a esquerda */
}

header .logo img {
    height: 50px; /* Tamanho da logo */
    width: auto;
    border-radius: 5px; /* Borda arredondada */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Sombra para destacar */
}

header nav {
    display: flex;
    justify-content: center;
    flex-grow: 1; /* Permite que a nav ocupe espaço disponível */
}

header nav ul {
    list-style: none;
    padding: 0;
    display: flex;
    margin: 0;
}

header nav ul li {
    margin: 0 15px;
}

header nav ul li a {
    color: #fff; /* Links do nav continuam brancos */
    text-decoration: none;
    font-weight: bold;
}

header nav ul li a:hover {
    text-decoration: underline;
}

main {
    padding: 20px;
}

.welcome {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    text-align: center; /* Centraliza o texto */
}

.welcome h1 {
    margin-top: 0;
}

.content {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

.courses {
    display: flex;
    flex-wrap: wrap;
}

.course {
    background-color: #f9f9f9;
    padding: 10px;
    margin: 10px;
    border-radius: 5px;
    flex: 1 1 calc(33.333% - 40px);
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.course h3 {
    margin-top: 0;
}

.course a {
    display: inline-block;
    margin-top: 10px;
    color: #003399; /* Links dos cursos continuam azuis */
    text-decoration: none;
}

.course a:hover {
    text-decoration: underline;
}

footer {
    background-color: #003399;
    color: #fff; /* Cor do texto do footer continua branca */
    text-align: center;
    padding: 10px 0;
    position: fixed;
    width: 100%;
    bottom: 0;
}

</style>
    <header>
        <div class="logo">
            <img src="images/logotipocw.png" alt="">
        </div>
        <nav>
            <ul>
                <li><a href="abacursos.html">Cursos</a></li>
                <li><a href="abatrofeus.html">Galeria de certificados</a></li>
                <li><a href="index.html">Suporte</a></li>
                <li><a href="profile.html">Perfil</a></li>
                <li><a href="sistema.php">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="welcome">
            <h1>Bem-vindo, [Nome do Aluno]!</h1>
            <p>Aqui você encontrará todas as informações sobre seus cursos, materiais e suporte.</p>
        </section>
        <section class="content">
            <h2>Seus Cursos</h2>
            <div class="courses">
                <div class="course">
                    <h3>SEO</h3>
                    <img src="" alt="">
                    <p>Aprenda as melhores práticas de otimização para motores de busca.</p>
                    <a href="#">Acessar</a>
                </div>
                <div class="course">
                    <h3>Curso de Marketing de Redes Sociais</h3>
                    <img src="" alt="">
                    <p>Crie conteúdo que engaja e converte.</p>
                    <a href="#">Acessar</a>
                </div>
                
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 CW CURSOS. Aqui seu conhecimento é prioridade.</p>
    </footer>
</body>
</html>
