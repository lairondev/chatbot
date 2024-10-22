<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot Flutuante</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="bg-light">

<!-- Botão flutuante -->
<button id="chat-toggle" class="btn btn-primary rounded-circle">
    💬
</button>

<!-- Janela do chat -->
<div id="chat-window" class="chat-window card">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">ChatBot</h5>
    </div>
    <div class="card-body" id="chat-box" style="height: 300px; overflow-y: auto;">
        <div class="bot-message fade-in">
            Olá! Sou a TerezaBot como posso ajudar?<br>
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

<script>
    $(document).ready(function () {
        // Alternar visibilidade da janela de chat ao clicar no botão
        $('#chat-toggle').click(function () {
            $('#chat-window').toggleClass('open');
        });

        // Enviar mensagens via AJAX
        $('#chat-form').submit(function (e) {
            e.preventDefault();
            let userInput = $('#user-input').val().trim();

            if (userInput !== '') {
                $('#chat-box').append('<div class="user-message fade-in">' + userInput + '</div>');

                $.ajax({
                    url: 'bot.php',
                    method: 'POST',
                    data: { message: userInput },
                    success: function (response) {
                        $('#chat-box').append('<div class="bot-message fade-in">' + response + '</div>');
                        $('#chat-box').scrollTop($('#chat-box')[0].scrollHeight);
                    }
                });

                $('#user-input').val('');
            }
        });
    });
</script>

</body>
</html>
