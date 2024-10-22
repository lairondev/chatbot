<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot Simples</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center bg-primary text-white">
            <h4>ChatBot Simples</h4>
        </div>
        <div class="card-body" id="chat-box" style="height: 400px; overflow-y: auto;">
            <!-- Mensagens aparecerão aqui -->
            <div class="bot-message fade-in">Olá! Bem-vindo ao nosso chatbot! Escolha uma opção:<br>
                1. Horário atual<br>
                2. Sobre o chatbot<br>
                3. Sair
            </div>
        </div>
        <div class="card-footer">
            <form id="chat-form">
                <div class="input-group">
                    <input type="text" id="user-input" class="form-control" placeholder="Digite sua opção...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#chat-form').submit(function (e) {
            e.preventDefault(); // Evita o reload da página
            let userInput = $('#user-input').val().trim();
            
            if (userInput !== '') {
                // Adiciona a mensagem do usuário ao chat
                $('#chat-box').append('<div class="user-message fade-in">' + userInput + '</div>');

                // Envia a mensagem para o bot.php via AJAX
                $.ajax({
                    url: 'bot.php',
                    method: 'POST',
                    data: { message: userInput },
                    success: function (response) {
                        // Adiciona a resposta do bot ao chat
                        $('#chat-box').append('<div class="bot-message fade-in">' + response + '</div>');
                        $('#chat-box').scrollTop($('#chat-box')[0].scrollHeight); // Scroll automático
                    }
                });

                $('#user-input').val(''); // Limpa o campo de input
            }
        });
    });
</script>

</body>
</html>
