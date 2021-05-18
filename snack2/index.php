<?php
    $name = $_GET["name"];

    // $mail = $_GET["mail"];

    // $age = $_GET["age"];

    // $result = 'Accesso riuscito';

    if (strlen($name) < 4){
        $result = 'Accesso negato';
    } else{
        $result = 'Accesso riuscito';
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

    <?php echo $result  ?>     

</body>
</html>