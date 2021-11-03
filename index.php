<?php
require __DIR__ . '/classes/prodotto.php';

$ItalianStyleRoast = new Prodotto("Starbucks Italian Style Roast", "Scura","America Latina", "Starbucks® by Nespresso", 10);
var_dump($ItalianStyleRoast);
$StarbucksVerandaBlend = new Prodotto("Starbucks Veranda Blend", "Blonde Roast","Asia", "Caffè macinato", 5);
var_dump($StarbucksVerandaBlend);