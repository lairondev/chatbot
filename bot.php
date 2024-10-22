<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userMessage = trim($_POST['message']);

    switch ($userMessage) {
		case '0':
			echo '1 - Redefinir senha de rede <br>
				  2 - Redefinir senha do expresso <br>
				  3 - Solicitar o cadastro do usuário <br>
				  4 - Solicitar um agendamento de transporte <br>
				  5 - Como abrir chamado de suporte {GLPI} <br>
				  6 - Como preencher o diário de frequência {SEI} passo a passo <br>
				  7 - Como solicitar um novo computador <br>
				  8 - Como solicitar a desativação de uma conta de rede {colaborador} saída <br>
				  9 - Outros assuntos';
			break;
        case '1':
            echo 'Acesse o roteador: Digite o IP do roteador no navegador (geralmente 192.168.0.1 ou 192.168.1.1).
				  Login: Entre com seu usuário e senha (padrão é geralmente admin/admin).
				  Configurações de Wi-Fi: Encontre a seção de Wi-Fi ou Wireless.
				  Alterar senha: Insira a nova senha e salve as alterações.
				  Reinicie o roteador (se necessário).';
            break;
        case '2':
            echo 'Acesse o site do Expresso.
				  Clique em “Esqueci a senha” ou “Resetar senha”.
				  Informe seu e-mail cadastrado e envie a solicitação.
				  Verifique seu e-mail e siga as instruções que receber para criar uma nova senha.';
            break;
        case '3':
            echo 'Acesse o site da GETIC.
				  Procure por uma opção como “Criar conta” ou “Cadastrar usuário”.
				  Preencha os dados solicitados, como nome, e-mail, e senha.
				  Siga as instruções adicionais que podem aparecer, como confirmação de e-mail.
				  Após concluir o cadastro, você poderá acessar sua conta.';
            break;
		case '4':
			echo 'Para solicitar um agendamento de transporte, você deve:
				  Acesse o site da GETIC.
				  Procure pela seção de "Agendamento de Transporte".
				  Preencha o formulário com as informações necessárias, como data, horário e local.
				  Envie a solicitação e aguarde a confirmação por e-mail ou telefone.';
			break;
		case '5':
			echo 'Para abrir um chamado de suporte no GLPI, siga os passos abaixo:
				  Acesse o portal do GLPI.
				  Faça login com suas credenciais.
				  Procure pela opção “Abrir Chamado” ou “Novo Chamado”.
				  Preencha todos os campos necessários com as informações do seu problema.
				  Envie o chamado e aguarde o retorno da equipe de suporte.';
			break;
		case '6':
			echo 'Para preencher o diário de frequência no SEI, siga os passos abaixo:
				  Acesse o sistema SEI.
				  Faça login com suas credenciais.
				  Navegue até a seção “Diário de Frequência”.
				  Selecione a opção “Adicionar Frequência” ou similar.
				  Preencha os campos obrigatórios com as informações necessárias, como data e horas.
				  Salve as alterações e confirme o envio.
				  Verifique se a frequência foi registrada corretamente.';
			break;
		case '7':
			echo 'Para solicitar um computador novo, siga os passos abaixo:
				  Acesse o site da GETIC.
				  Procure pela seção de “Solicitações” ou “Pedidos de Equipamento”.
				  Preencha o formulário com as informações necessárias, como justificativa e especificações do equipamento.
				  Envie a solicitação e aguarde a confirmação.
				  Se necessário, entre em contato com a equipe de TI para mais detalhes.';
			break;
		case '8':
			echo 'Para solicitar a desativação de uma conta de rede para um colaborador que saiu, siga os passos abaixo:
				  Acesse o site da GETIC.
				  Procure pela seção de “Desativação de Conta” ou “Gestão de Usuários”.
				  Preencha o formulário com as informações necessárias, como nome do colaborador e justificativa.
				  Envie a solicitação e aguarde a confirmação da equipe de TI.
				  É recomendável informar o gestor imediato sobre a solicitação.';
			break;
		case '9':
			echo 'Para outros assuntos, por favor, especifique sua dúvida ou questão. Estou aqui para ajudar! Se preferir, você também pode entrar em contato diretamente com a equipe de TI pelo e-mail ou telefone disponíveis no site da GETIC.';
			break;
        default:
            echo 'Opção inválida. Digite 0 para ver o menu de opções.';
    }
}
?>
