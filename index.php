<?php

## PHP - Les dates
## Pour tous les exercices, vous pouvez utiliser le site http://php.net
## N'hesitez pas à faire des pages avec du HTML/CSS

## Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)
$date = date("d/m/Y");
echo "$date<br><br>";



## Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)
$date1 = date("d-m-y");
echo "$date1<br><br>";



## Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
## Bonus : Le faire en français.
date_default_timezone_set('Europe/Paris');
$date2 = date("D d M Y");
echo "$date2<br><br>";



## Exercice 4 Afficher le timestamp du jour.
## Afficher le timestamp du mardi 2 août 2016 à 15h00.
$timestamp = mktime(15, 00, 00, 8, 2, 2016);
echo "$timestamp<br><br>";



##Exercice 5 Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.
$timestamp2 = strtotime('2016/05/16');
$timestamp3 = strtotime('2023/01/13');

$calcul = ($timestamp3 - $timestamp2)/1000/100;
echo "$calcul<br><br>";



##Exercice 6 Afficher le nombre de jours dans le mois de février de l'année 2016.
$timestamp2 = strtotime('2016/02/01');
$timestamp3 = strtotime('2016/03/01');

$calcul2 = ($timestamp3 - $timestamp2)/1000/100;
echo "$calcul2<br><br>";



##Exercice 7 Afficher la date du jour + 20 jours.
$today = strtotime('+20 days');

echo "$today<br><br>";

##Exercice 8 Afficher la date du jour - 22 jours
$today = strtotime('-22 days');

echo "$today<br><br>";
echo "<br><br>";


## TP Faire un formulaire avec deux listes déroulantes.
## La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
# MEGA BONUS ( surligné et caractère gras :-)  ) : En fonction des choix, afficher un calendrier ( voir libs JS ou autres )


