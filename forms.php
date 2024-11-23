<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $celular = htmlspecialchars($_POST['celular']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Verifica se os campos obrigatórios estão preenchidos
    if (!$email) {
        echo "Por favor, insira um e-mail válido.";
        exit;
    }

    // Configurações do e-mail
    $to = "lisboapedro70@gmail.com"; // Substitua pelo seu endereço de e-mail
    $assunto = "Nova mensagem do formulário";
    $mensagemEmail = "Você recebeu uma nova mensagem do formulário:\n\n";
    $mensagemEmail .= "Nome: $nome\n";
    $mensagemEmail .= "E-mail: $email\n";
    $mensagemEmail .= "Celular: $celular\n";
    $mensagemEmail .= "Mensagem: $mensagem\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envia o e-mail
    if (mail($to, $assunto, $mensagemEmail, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha ao enviar o e-mail. Tente novamente mais tarde.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
