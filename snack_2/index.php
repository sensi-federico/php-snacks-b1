<!-- ## Snack 2

#1  Con un form passare come parametri GET name, mail e age 
#2  verificare (cercando i metodi che non conosciamo nella documentazione) 
    che name sia più lungo di 3 caratteri, 
    che mail contenga un punto e una chiocciola e che age sia un numero. 
#3  Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$age = $_GET['age'];
$name = $_GET['name'];
$mail = $_GET['mail'];

if (is_numeric($age) && strlen($name) > 3 && str_contains($mail, '.') && str_contains($mail, '@')) {
    echo 'Access Done';
} else {
    echo 'Access Denied';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="get">
        <br>
        <br>
        <label for="age">Insert your age</label>
        <input type="number" name="age" id="age">
        <br>
        <br>
        <label for="name">Insert your name</label>
        <input type="text" name="name" id="name" aria-describeby="nameHelper">
        <br>
        <br>
        <label for="mail">Insert your mail</label>
        <input type="email" name="mail" id="mail">
        <br>
        <br>
        <button type="submit">submit</button>
    </form>

</body>

</html>