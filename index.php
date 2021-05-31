<?php
    require_once __DIR__ . '/Drums.php';
    require_once __DIR__ . '/Guitars.php';
    require_once __DIR__ . '/Basses.php';
    require_once __DIR__ . '/User.php';


    //Oggetti Drums
    $tama = new Drums('batteria', 'Tama', 'Starclassic', '2500€');
    $gretsch = new Drums('batteria', 'Gretsch', 'Catalina', '1500€');

    //Oggetti Guitars
    $fender_guitar = new Guitars('chitarra', 'Fender', 'Stratocaster', '2000€');
    $gibson = new Guitars('chitarra', 'Gibson', 'Les Paul', '2500€');

    //Oggetti Basses
    $fender_bass = new Basses('basso', 'Fender', 'Jazz', '2000€');
    $fender_bass->corde = 4;

    $warwick = new Basses('basso', 'Warwick', 'Fortress', '1000€');
    $warwick->corde = 5;

    //Users
    $user1 = new User('Maurizio', 'Costanzo', 'mauri.costanzo@gmail.com');
    $user1->addItem($gibson);
    // var_dump($user1);

    $user2 = new User('Angela', 'Merkel', 'angy.merkel@gmail.com');
    $user2->addItem($gretsch);
    // var_dump($user2);

    $user3 = new User('Dennis', 'Rodman', 'dennis.rodman@gmail.com');
    $user3->addItem($fender_bass);
    // var_dump($user3);

    $user4 = new User('Anthony', 'Hopkins', 'anthony.hopkins@gmail.com');
    $user4->addItem($fender_guitar);
    // var_dump($user4);

    // array di tutti gli utenti e i loro acquisti
    $users = [$user1, $user2, $user3, $user4];
    // var_dump($users);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordini utenti</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Ordini utenti</h1>

    <?php foreach($users as $user) {?>
        <div class="utente">
            
                <p><strong>Nome: </strong><?php echo $user->nome?></p>
                <p><strong>Cognome: </strong><?php echo $user->cognome?></p>
                <p><strong>E-mail: </strong><?php echo $user->email?></p>

                <div> <strong>Prodotto: </strong>
                    <?php foreach($user->items as $item) {?>
                        <?php echo $item->marca?>
                        <?php echo $item->modello?>
                        <?php echo $item->prezzo?>
                    <?php } ?>
                </div>
            
        </div>
    <?php } ?>
</body>
</html>