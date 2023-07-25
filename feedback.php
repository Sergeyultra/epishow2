<?php
$username = ($_POST['name']);
$feedback = $_POST['feedback'];
$db = new mysqli("127.0.0.1", "root", "password", "mysql");
mysqli_query($db, "CREATE TABLE IF NOT EXISTS FEEDBACK(NAME TEXT, FEEDBACK TEXT);");
$stm = $db->prepare("INSERT INTO FEEDBACK(NAME, FEEDBACK) VALUES (?, ?)");
$stm->bind_param("ss", $username, $feedback);
$stm->execute();
$db->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Burger Shop
    </title>
</head>

<body style="font-size: x-large; text-align: center;">
    Спасибо вам за ваш отзыв!
    <a href="/">Обратно на сайт</a>
</body>

</html>