<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lastName = htmlspecialchars($_POST['lastName']);
    $firstName = htmlspecialchars($_POST['firstName']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $currentDateTime = date('Y-m-d--H-i');
    $fileName = "mail/{$currentDateTime}.txt";

    $content = "Фамилия: $lastName\nИмя: $firstName\nЕмейл: $email\nСообщение:\n$message";

    if (!is_dir('mail')) {
        mkdir('mail', 0777, true);
    }

    file_put_contents($fileName, $content);
    echo "<p>Message sent successfully! Thank you for your comments.</p>";
} else {
    echo "<p>Error: The Form was not submitted correctly.</p>";
}
?>
