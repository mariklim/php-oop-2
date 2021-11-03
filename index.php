<?php
require __DIR__ . '/classes/prodotto.php';
require __DIR__ . '/classes/ricetta.php';

$ItalianStyleRoast = new Prodotto("Starbucks Italian Style Roast", "Scura","America Latina", "Starbucks® by Nespresso", 10);

$StarbucksVerandaBlend = new Prodotto("Starbucks Veranda Blend", "Blonde Roast","Asia", "Caffè macinato", 5);


// $ItalianStyleRoast->SetRicette("Latte Macchiato");
// $ItalianStyleRoast->SetRicette("Spiced Flat White");
// $ItalianStyleRoast->SetRicette("Iced Caramel Latte & Vanilla Cream");
// var_dump($ItalianStyleRoast);
$LatteMacchiato = new Ricetta("Latte Macchiato", "Caffè, latte, zucchero", "5 min");
$SpicedFlatWhite = new Ricetta("Spiced Flat White", "Caffè, latte, zucchero, cannella", "6 min");
$IcedCaramel = new Ricetta("Spiced Flat White", "Caffè, latte, zucchero, ccaramel, ghiaccio", "10 min");

$ItalianStyleRoast->setRicette($LatteMacchiato);
$ItalianStyleRoast->setRicette($SpicedFlatWhite);
$ItalianStyleRoast->setRicette($IcedCaramel);
var_dump($ItalianStyleRoast->getRicette());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbucks OOP shop</title>
</head>
<body>
    <main>
    <h2><?php echo $ItalianStyleRoast->getTitolo() ?></h2>
    <h3><?php echo $ItalianStyleRoast->getTostatura() ?></h3>
    <h3><?php echo $ItalianStyleRoast->getOrigine() ?></h3>
    <h3><?php echo $ItalianStyleRoast->getFormato() ?></h3>
    <h3><?php echo $ItalianStyleRoast->getPrezzo() ?> euro</h3>
    <h3>Ricette:</h3>
        
    <ul>
				<?php foreach($ItalianStyleRoast->getRicette() as $ricetta) { ?>
					<li><?php echo $ricetta->getNome(); ?></li>
				<?php } ?>
				</ul>
       
        


    
    </main>
    
</body>
</html>