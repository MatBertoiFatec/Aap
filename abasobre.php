<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CW Cursos - Cursos de Marketing Digital</title>
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
            justify-content: space-between;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header .logo img {
            height: 50px;
            width: auto;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        header nav {
            flex-grow: 1;
            display: flex;
            justify-content: center;
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

        .about, .team, .courses, .accessibility {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .about img, .accessibility img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-top: 20px;
        }

        .about h1 {
            font-size: 2em;
            margin-bottom: 10px;
            color: #003399;
        }

        .about p {
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .about .executives {
            margin-top: 20px;
        }

        .about .executives h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #003399;
        }

        .about .executives ul {
            list-style: none;
            padding: 0;
        }

        .about .executives ul li {
            margin-bottom: 10px;
            font-weight: bold;
        }

        .about .executives ul li span {
            font-weight: normal;
        }

        .team .team-members {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .team .member {
            text-align: center;
            max-width: 200px;
        }

        .team .member img {
            width: 100%;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .courses .course-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .courses .course {
            background-color: #f9f9f9;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            max-width: 300px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .courses .course img {
            width: 100%;
            border-radius: 5px;
        }

        .courses .course h3 {
            margin-top: 10px;
        }

        .courses .course a {
            display: inline-block;
            margin-top: 10px;
            color: #003399; /* Links dos cursos continuam azuis */
            text-decoration: none;
            font-weight: bold;
        }

        .courses .course a:hover {
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
            <img src="images/logotipocw.png" alt="CW Cursos">
        </div>
        <nav>
            <ul>
                <li><a href="#about">Sobre Nós</a></li>
                <li><a href="#team">Equipe</a></li>
                <li><a href="#courses">Cursos</a></li>
                <li><a href="#accessibility">Acessibilidade</a></li>
                <li><a href="sistema.php">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="about" class="about">
            <h1>Sobre a CW Cursos</h1>
            <p>A CW Cursos é uma empresa dedicada a fornecer cursos online de alta qualidade em marketing digital. Nosso diferencial é a acessibilidade para pessoas surdas, garantindo que todos possam aprender e se desenvolver em suas carreiras.</p>
            
            <p>Conheça a nossa equipe e suas relativas funções:</p>
            
            <div class="executives">
                <h2>Executivos</h2>
                <ul>
                    <li>Matheus Garcia Bertoi: <span>Diretor Executivo. É o principal responsável pela nossa gestão, tomando as principais decisões corporativas, gerenciando operações e recursos da empresa.</span></li>
                    <li>Jonathans Yoshioka Olsen: <span>Diretor de Tecnologia. Responsável por supervisionar a gestão e as estratégias tecnológicas da empresa, além de estar encarregado de implementar novas tecnologias que possam melhorar os produtos ou serviços da empresa.</span></li>
                    <li>Claudio da Silva Soares: <span>Diretor de Marketing. Responsável por todas as atividades de marketing dentro da empresa, incluindo estratégias de publicidade, pesquisa de mercado, desenvolvimento de produtos e comunicação com o cliente.</span></li>
                    <li>Gustavo Henrique de Moraes: <span>Diretor de Operações. Responsável pelas operações diárias da empresa, incluindo a produção, logística, recursos humanos, e outros aspectos operacionais. Atua para garantir que as operações da empresa sejam eficientes e eficazes.</span></li>
                    <li>Gabriela Novais Nascimento: <span>Diretora Financeira. Responsável pela gestão financeira da empresa, incluindo planejamento financeiro, gestão de riscos, relatórios financeiros, e análise de dados financeiros para orientar as decisões estratégicas da empresa.</span></li>
                </ul>
            </div>
        </section>
        
        <section id="team" class="team">
            <h2>Nosso Time</h2>
            <div class="team-members">
                <div class="member">
                    <img src="images/imgcapaexemplo.jpg" alt="Membro da Equipe">
                    <h3>Matheus Garcia Bertoi</h3>
                    <p>CEO</p>
                </div>
                <div class="member">
                    <img src="images/membrojonathans.jpeg" alt="Membro da Equipe">
                    <h3>Jonathans Yoshioka Olsen</h3>
                    <p>CTO</p>
                </div>
                <div class="member">
                    <img src="images/membroClaudio.jpg" alt="Membro da Equipe">
                    <h3>Claudio da Silva Soares</h3>
                    <p>CMO</p>
                </div>
                <div class="member">
                    <img src="images/membroGustavo.jpg" alt="Membro da Equipe">
                    <h3>Gustavo Henrique de Moraes</h3>
                    <p>COO</p>
                </div>
                <div class="member">
                    <img src="images/membroGabi.jpg" alt="Membro da Equipe">
                    <h3>Gabriela Novais Nascimento</h3>
                    <p>CFO</p>
                </div>
            </div>
        </section>
        
        <section id="courses" class="courses">
            <h2>Nossos Cursos</h2>
            <div class="course-list">
                <div class="course">
                    <img src="images/intmktdigital.png" alt="Curso de Marketing Digital">
                    <h3>Introdução ao Marketing Digital</h3>
                    <p>Aprenda os fundamentos do marketing digital e como aplicá-los.</p>
                    <a href="abacursos.html">Saiba Mais</a>
                </div>
                <div class="course">
                    <img src="images/seoavançado.png" alt="Curso de SEO">
                    <h3>SEO Avançado</h3>
                    <p>Domine as técnicas de SEO para melhorar a visibilidade do seu site.</p>
                    <a href="abacursos.html">Saiba Mais</a>
                </div>
                <div class="course">
                    <img src="images/mktemredessociasi.png" alt="Curso de Redes Sociais">
                    <h3>Marketing em Redes Sociais, parte 1</h3>
                    <p>Crie estratégias eficazes para promover seu negócio nas redes sociais.</p>
                    <a href="abacursos.html">Saiba Mais</a>
                </div>
                <div class="course">
                    <img src="images/cursodeMidiasDigitais_curso.png" alt="Curso de Redes Sociais parte 2">
                    <h3>Marketing em Redes Sociais, parte 2</h3>
                    <p>Crie estratégias eficazes para promover seu negócio nas redes sociais. Segunda parte do curso de Redes Sociais, voltada mais para a parte de divulgação e não apenas venda.</p>
                    <a href="abacursos.html">Saiba Mais</a>
                </div>
                <div class="course">
                    <img src="images/Marketingdeconteudo_curso.png" alt="Curso de Marketing de Contúdo">
                    <h3>Marketing de Conteúdo</h3>
                    <p>Crie conteúdo que engaja e converte.</p>
                    <a href="abacursos.html">Saiba Mais</a>
                </div>
            </div>
        </section>
        
        <section id="accessibility" class="accessibility">
            <h2>Acessibilidade</h2>
            <p>Na CW Cursos, acreditamos que a educação deve ser acessível para todos. Por isso, todos os nossos cursos são projetados com recursos de acessibilidade para pessoas surdas, incluindo vídeos com interpretação em Libras e legendas em todos os materiais audiovisuais.</p>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 CW Cursos. Aqui seu conhecimento é prioridade.</p>
    </footer>
</body>
</html>
