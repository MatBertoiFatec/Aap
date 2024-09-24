document.addEventListener('DOMContentLoaded', () => {
    var chatboxToggle = document.getElementById('chatbot-toggle');
    var chatbox = document.getElementById('chatbox');
    var chatMessages = document.getElementById('chat-messages');
    var chatInput = document.getElementById('chat-input');
    var chatSend = document.getElementById('chat-send');

    var initialMessages = ["Bem-vindo ao nosso suporte! Em que posso ajudar?"];

    chatboxToggle.onclick = function() {
        if (chatbox.classList.contains('active')) {
            chatbox.classList.remove('active');
            chatMessages.innerHTML = ''; // Limpa as mensagens ao fechar o chatbox
        } else {
            chatbox.classList.add('active');
            displayInitialMessages();
        }
    };

    function sendMessage() {
        var message = chatInput.value.trim();

        if (message !== '') {
            addMessage(message, false); // Adiciona a mensagem do usuário ao chat

            //parametro chat aqui
           
            
        }
    }

    chatSend.onclick = sendMessage;

    chatInput.addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Evita a submissão do formulário
            sendMessage();
        }
    });

    function displayInitialMessages() {
        initialMessages.forEach(function(message) {
            addMessage(message, true);
        });
    }

    function addMessage(message, isRobot) {
        var messageElement = document.createElement('p');
        messageElement.textContent = message;
        if (isRobot) {
            messageElement.classList.add('robot-message');
        } else {
            messageElement.classList.add('user-message');
        }
        chatMessages.appendChild(messageElement);
    }
});
