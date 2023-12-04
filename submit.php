<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Полученные данные</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "<h1>Спасибо за ваше сообщение!</h1>";
    echo "<p>Уважаемый(ая) $name,</p>";
    echo "<p>Мы получили ваше сообщение и адресуем его соответствующему отделу для дальнейшей обработки:</p>";
    echo "<blockquote>$message</blockquote>";
    echo "<p>Мы свяжемся с вами по электронной почте: $email</p>";
    echo "<p>С уважением,<br>Команда поддержки.</p>";
} else {
    echo "<p>К сожалению, была проблема с отправкой формы.</p>";
}
?>

</body>
</html>
