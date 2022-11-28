<!-- ## Snack 1

#1 Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
#2 Ogni array avrà una squadra di casa e una squadra ospite, 
#2 punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
#3 Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60 -->

<?php
$matches = [
    'Boston Celtics - Chicago Bulls | 102 - 89',
    'Miami Heat - LA Lakers | 80 - 112',
];

foreach ($matches as $match) {
    echo $match;
    echo '<br>';
}

// method 2

echo '<br>';

$matches_2 = array(
    array('Boston Celtics', 'Chicago Bulls', '102', '89'),
    array('Miami Heat', 'LA Lakers', '80', '112')
);

echo "Home " . $matches_2[0][0] . '<br>' . 'Guest ' . $matches_2[0][1] . '<br>' . ' Points Home ' . $matches_2[0][2] . '<br>' . ' Points Guest ' . $matches_2[0][3]


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



</body>

</html>