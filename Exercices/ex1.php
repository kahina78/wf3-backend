<!DOCTYPE html>
<html>
<body>
<h1>Exercice 1 PHP</h1>
<h2>Exemple a)</h2>
<?php
echo"Hello World!";
?>


<h2>Exemple b)</h2>

<?php
$texteDuParagraphe= "Hello World";
$entier = 7;
$decimal = 10.5;
$x = "12.5iot"; // reconnait les premiers caractères comme étant un type décimal
$y = 4;
$z = $x + $decimal;

define("VITESSE_MAX", 3000000);
define("AGE_LIMITE", 14);

//echo $texteDuParagraphe;
//echo $entier;
//echo $decimal;

//echo $VITESSE_MAX; est une erreure car ce n'est pas une variable mais une constante
echo VITESSE_MAX;
echo "";
echo constante("VITESSE_MAX");


echo $z;

?>
</body>
</html>