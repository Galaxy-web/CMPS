<?php
// Verifica se a solicitação foi feita usando o método POST (quando o formulário é enviado)
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Adicione mensagens de depuração
    error_log("Formulário POST recebido.");

    // Captura os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagem"];

    // Faça o que quiser com os dados, como enviar um email ou salvar em um banco de dados
    // Neste exemplo, vamos enviar um email

    // Substitua "seuemail@example.com" pelo endereço de email para onde deseja enviar as mensagens
    $destinatario = "martinsoliveiramiguel2@gmail.com";

    // Assunto do email
    $assunto = "Nova mensagem de contato de $nome";

    // Corpo do email (conteúdo da mensagem)
    $corpo = "Nome: $nome\n";
    $corpo .= "Email: $email\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "Mensagem:\n$mensagem";

    // Função mail() para enviar o email (certifique-se de que o servidor suporta o envio de email)
    mail($destinatario, $assunto, $corpo);

    // Redireciona de volta para a página de contato com uma mensagem de sucesso
    header("Location: contato.html?sucesso=true");
} else {
    // Caso alguém acesse o arquivo diretamente, você pode redirecionar de volta para a página de contato
    header("Location: contato.html");
}
?>
