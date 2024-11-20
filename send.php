<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Dane z formularza
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Adres, na który wysyłana jest wiadomość
    $to = "bartekprzybysz@gmail.com";
    $subject = "Nowa wiadomość od: $name";

    // Treść e-maila
    $emailMessage = "
    Imię: $name\n
    Email: $email\n
    Wiadomość:\n$message
    ";

    // Nagłówki wiadomości
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Wyślij wiadomość
    mail($to, $subject, $emailMessage, $headers);
}

