<!DOCTYPE html>
<html>
<head>
  <link rel="stylsheet" href="style.css"/>

<body>

<h1>Exercice 1 de PHP</h1>

<p><h2>Exemple a): Hello World</h2></p>

<?php

?>
<p><?php echo "Hello World!" ?></p>


<p><h2>Exemple b): Definition de variables</h2></p>

<?php
//Definition de variables
$texteDuParagraphe= "Hello World";
$entier = 7;
$decimal = 10.5;
$x = "12.5"; // reconnait les premiers caractères comme étant un type décimal
$y = 4;
$z = $x + $decimal;

define("VITESSE_MAX", 3000000);
define("AGE_LIMITE", 14);

//echo $texteDuParagraphe;
//echo $entier;
//echo $decimal;

//echo $VITESSE_MAX; est une erreure car ce n'est pas une variable mais une constante
//echo VITESSE_MAX;
//echo "";
//echo constant("VITESSE_MAX");

?>
<p><?php echo $z ?></p>

<p><h2>Exemple c): Incrementation (ajout de 1)</h2></p>

<?php

// INCREMENTATION (ajout de 1)
$z++;
$z = $z + 1; // Exactement le même resultat que la ligne précédente
$z += 1; // Exactement le même resultat que la ligne précédente

//LA DECREMENTATION (retire 1)
$z --;
$z = $z- 1;// Exactement le même resultat que la ligne précédente
$z -= 1;// Exactement le même resultat que la ligne précédente


//Exemple  SUPPLEMENTAIRE
$z = $entier+$entier-$decimal;

?>
<p><?php echo $z ?></p>


<p><h2>Exemple d): php dans une balise html</h2></p>
<!--Mise en place d'une liste-->
<ul>
     <li><?php echo $texteDuParagraphe; ?></li>
     <li><?php echo $entier; ?> </li>
     <li><?php echo $decimal; ?> </li>
     <li><?php echo  $x; ?> </li>
     <li><?php echo  $y; ?> </li>
     <li><?php echo  $z; ?> </li>
</ul>

<p><h2>Exemple e): html dans une balise php<h2></p>

<?php echo "<p>".$texteDuParagraphe."</p>"; // "." concaténation ?>
<?php echo "<p>"."Hello World"."</p>"; // Exactement le meme resultat que la ligne précédente ?>
<?php echo "Hello World"; // Exactement la meme resultat que la ligne précédente ?> 

<?php echo "<a href='https://google.fr'>".$z."</a>" ?>
<?php echo'<a href="https://google.fr">'.$z. '</a>' // exactement le même résultat que la ligne précédente ?>

<?php echo
 "<p> 
 Sayah a dit : 
 <q>BONJOUR L'HISTOIR!</q>
 <p>"
 ?>
 




</body>
</html>