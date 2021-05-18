<?php
    $matches = [
        [
            'squadraHome' => 'Olimpia Milano',
            'squadraAway' => 'Venezia',
            'puntiHome' => 67,
            'puntiAway' => 88
        ],
        [
            'squadraHome' => 'Universo Treviso',
            'squadraAway' => 'Trento',
            'puntiHome' => 80,
            'puntiAway' => 71
        ],
        [
            'squadraHome' => 'Brescia',
            'squadraAway' => 'Varese',
            'puntiHome' => 75,
            'puntiAway' => 59
        ],

        [
            'squadraHome' => 'Fortitudo Bologna',
            'squadraAway' => 'Reggiana',
            'puntiHome' => 70,
            'puntiAway' => 69
        ],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cartello basket</title>
</head>
<body>

<ul>
        <?php for($i = 0; $i < count($matches); $i++) { ?>
            <?php $this_match = $matches[$i]; ?>

            <li>
                 <?php echo $this_match['squadraHome'] ?> -  <?php echo $this_match['squadraAway'] ?> | <?php echo $this_match['puntiHome'] ?>-<?php echo $this_match['puntiAway'] ?>
            </li>
        <?php } ?>     
    </ul>

</body>
</html>