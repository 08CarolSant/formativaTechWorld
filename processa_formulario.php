<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    
    // Aqui, você pode adicionar código para enviar a mensagem por email ou salvá-la em um banco de dados, dependendo das suas necessidades.
    
    // Exemplo de envio de email (requer configuração de servidor de email):
    $destinatario = "seu@email.com";
    $assunto = "Mensagem de Contato de $nome";
    $headers = "De: $email";
    
    mail($destinatario, $assunto, $mensagem, $headers);
    
    // Redirecionar de volta para a página de contato ou exibir uma mensagem de confirmação.
    header("Location: contato.html");
} else {
    // Se alguém tentar acessar diretamente processa_formulario.php, redireciona de volta para a página de contato.
    header("Location: contato.html");
}
?>
