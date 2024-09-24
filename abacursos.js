function showDetails(courseId) {
    var courses = {
        'curso1': {
            'title': 'Curso de SEO',
            'description': 'Aprenda as melhores práticas de otimização para motores de busca. Com este curso, você dominará técnicas para melhorar o posicionamento do seu site nos resultados de busca, aumentando o tráfego orgânico e alcançando mais clientes em potencial.',
            'videoLink': 'https://www.example.com/video-seo',
            
        },
        'curso2': {
            'title': 'Curso de Marketing de Conteúdo',
            'description': 'Crie conteúdo que engaja e converte. Aprenda a desenvolver uma estratégia de marketing de conteúdo que atraia e retenha seu público-alvo, utilizando técnicas comprovadas para produzir conteúdo de alta qualidade que gere resultados.',
            'videoLink': 'https://www.example.com/video-marketing-conteudo',
            
        },
        'curso3': {
            'title': 'Curso de Mídias Sociais',
            'description': 'Domine as redes sociais e aumente sua presença online. Este curso ensina como utilizar as principais plataformas de mídia social para promover seu negócio, criar campanhas eficazes e interagir com seu público de maneira autêntica e impactante.',
            'videoLink': 'https://www.example.com/video-midias-sociais',
            
        },
        'curso4': {
            'title': 'Curso de Introdução ao Marketing',
            'description': 'Aprenda os fundamentos do marketing digital e como aplicá-los.',
            'videoLink': 'https://www.example.com/video-introducao-marketing',
            
        },
        'curso5': {
            'title': 'Curso de Redes Sociais',
            'description': 'Domine as redes sociais e aumente sua presença online. Parte voltada do curso para a venda.',
            'videoLink': 'https://www.example.com/video-redes-sociais',
            
        }
    };

    var modal = document.getElementById("modal");
    var modalTitle = document.getElementById("modal-title");
    var modalDescription = document.getElementById("modal-description");
    var modalLink = document.getElementById("modal-link");
    var modalImage = document.getElementById("modal-image");

    modalTitle.textContent = courses[courseId].title;
    modalDescription.textContent = courses[courseId].description;
    modalLink.href = courses[courseId].videoLink;
    modalImage.src = courses[courseId].image;

    modal.style.display = "block";
}

function closeModal() {
    var modal = document.getElementById("modal");
    modal.style.display = "none";
}

window.onclick = function(event) {
    var modal = document.getElementById("modal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
