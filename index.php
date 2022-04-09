<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO vehicles</title>
</head>
<body>

<?php

    require_once 'GarageCar.php';
    $car = new GarageCar('green', 4, 'electric',20, false);
    echo $car->forward();

    //Instance of new car
    $car = new GarageCar('black', 4, 60, 30, false);
    $car->getCurrentSpeed = 30;
    $car->getEnergyLevel = 45;
    echo $car->start().'<br>';

    //Instance new car
    $car2= new GarageCar('orange', 3, 60, 10, true);
    echo $car2->getColor().'<br>';

    try{
        echo $car2->start().'<br>';

    }catch(Exception $e){

        echo $e->getMessage();
        var_dump($e);
        echo$car2->setHasParkBrake(false);

    } finally {
        echo 'My car drives like a donut !';
    }

?>

</body>
</html>