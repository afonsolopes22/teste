<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $experiencia = $_POST['experiencia'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $pessoas = $_POST['pessoas'];

    $to = "teu-email@dominio.com"; // <-- altera para o teu email real
    $subject = "Nova Reserva - $experiencia";
    $message = "Nova reserva:\n\nExperiência: $experiencia\nNome: $nome\nEmail: $email\nNúmero de pessoas: $pessoas";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Reserva enviada com sucesso!');window.history.back();</script>";
    } else {
        echo "<script>alert('Erro ao enviar reserva. Tente novamente.');window.history.back();</script>";
    }
}
?>
