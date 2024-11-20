<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pobranie danych z formularza
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Konfiguracja adresu odbiorcy
    $to = "bartekprzybysz@gmail.com";
    $subject = "Nowa wiadomość od: $name";

    // Treść e-maila
    $emailMessage = "
    Imię: $name\n
    Email: $email\n
    Wiadomość:\n$message
    ";

    // Nagłówki e-maila
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Wysyłka e-maila
    if (mail($to, $subject, $emailMessage, $headers)) {
        echo "Wiadomość została wysłana pomyślnie!";
    } else {
        echo "Błąd podczas wysyłania wiadomości.";
    }
} else {
    echo "Nieprawidłowa metoda wysyłania.";
}
?>
