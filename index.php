<?php
require_once "Hero.php";
require_once "Orc.php";
$hero = new Hero(2000, 0, 'caca', 250, 'pipi', 600);
$orc = new Orc(500, 0);
?>
<!doctype html>
<html lang="fr">

<head>
    <title>POO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-6 text-center">
            <?php
            echo "<p>HERO vie: " . $hero->getHealth() . " rage: " . $hero->getRage() . " arme: " . $hero->getWeapon() . " degats arme :" . $hero->getWeaponDamage() . " bouclier: " . $hero->getShield() . " resistance bouclier: " . $hero->getShieldValue() . "</p>"; ?>
        </div>
        <div class="col-6 text-center">
            <?php echo "<p>ORC vie:" . $orc->getHealth() . " rage: " . $orc->getRage() . "</p>"; ?>
        </div>
    </div>
    <Div class="row">
        <div class="col-6 text-center">
            <?php
            $i = 0;
            while ($hero->getHealth() > 0) {
                $i++;
                $hit = $orc->attack();
                $hero->attacked($hit);

                echo "<h1>point de vie du hero " . $hero->getHealth() . "</h1>";
                echo "<h2>point de rage du hero " . $hero->getRage() . "</h2>";
            } ?></div>
        <div class="col-6 text-center">
            <?php
            while ($orc->getHealth() > 0) {
                $hit++;
                $hit = $hero->maxRage();
                $orc->attacked($hit);
                echo "<h1>point du vie de l'orc " . $orc->getHealth() . "</h1>";
                echo "<h2>points de rage de l'orc " . $orc->getRage() . "</h2>";
            }
            ?>
        </Div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>