<?php


require 'Titulaire.php';
require 'Compte.php';

$a1 = new Titulaire ("KING", "Stephen","1988-10-22","Strasbourg");
$a2 = new Titulaire ("MUSSO", "Guillaume","1982-12-10","Mulhouse");

$l1 = new Compte ("Livret A",15000,"€",$a1);
$l2 = new Compte ("Livret A", 3,"bitcoin",$a1);
$l3 = new Compte ("Compte courant",2000,"rupies",$a2);
$l4 = new Compte ("Compte epargne",1987,"$",$a2);

$l1->credit(0);
$l2->credit(0);
$l3->credit(0);
$l4->credit(0);

$l1->debit(0);
$l2->debit(0);
$l3->debit(0);
$l4->debit(0);


$a1->afficherComptes();
$a2->afficherComptes();
