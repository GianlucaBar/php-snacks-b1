<?php
    $name = $_GET["name"];

    $mail = $_GET["mail"];

    $age = $_GET["age"];

    $result = 'Accesso riuscito';

    if (strlen($name) < 4 ){
        $result = 'Accesso negato';
    } else if (strpos($mail, '@') === false || strpos($mail, '.') === false){
        $result = 'Accesso negato';
    } else if (is_numeric($age) == false){
        $result = 'Accesso negato';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Email Age</title>
</head>
<body>

    <h1> <?php echo $result  ?> </h1>     

</body>
</html>