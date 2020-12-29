<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8"/>
    <link rel="stylesheet" href="style.css"/>
    <title>ALLO PHP - Site de formation PHP</title>

    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/site.webmanifest">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <meta name="description" content="Découvrez les joies de la programmation PHP sur ALLO PHP, meilleur site de formation PHP." />

</head>


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
$z++; // similaire à "++$z"
$z = $z + 1; // Exactement le même resultat que la ligne précédente
$z += 1; // Exactement le même resultat que la ligne précédente

//LA DECREMENTATION (retire 1)
$z --; //similaire à "--$z"
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

 <h2>Exemple f : rappels html/css </h2>

<p class="attention">
    Il faut nettoyer la plaie avant de mettre le 
    pansement sinon il y a un risque d'infection.
</p>

<p>
   Vous pouvez appeler les secours en composant le numéro.
</p>

<p class="attention">
   Veillez à être CLAIR, BREF et PRECIS sur le danger et 
   sur le lieu de l'accident
</p>
<h2>Exemple g): Les operateurs php</h2>

<?php
 $x=10;
 $y=6;
 ?>
 <ul>
 <li><?php echo ($x + $y); // Affiche 16 ?></li>
 <li><?php echo ($x - $y); // Affiche 4 ?></li>
 <li><?php echo ($x * $y); // Affiche 60 ?></li>
 <li><?PHP echo ($x / $y); // Affiche 1.6666666666667 ?></li>
 <li><?php echo ($x % $y); // Affiche 4 ?></li>
</ul>

<ul>
<?php 


$x = 20;
    $y = 6;
?>
<ul>
    <li><?php echo ($x + $y); // Affiche 26 ?></li>
    <li><?php echo ($x - $y); // Affiche 14 ?></li>
    <li><?php echo ($x * $y); // Affiche 120 ?></li>
    <li><?php echo ($x / $y); // Affiche 3.3333333... ?></li>
    <li><?php echo ($x % $y); // Affiche 2 ?></li>

    <?php
        $y = 20;
        $y += 100; // similaire à "$y = $y + 100;"
        echo "<li>".$y."</li>"; // Affiche 120

        $z = 50;
        $z -= 25;
        echo "<li>".$z."</li>"; // Affiche 25

        $i = 5;
        $i *= 6; // similaire à "$i = $i * 6"
        echo "<li>".$i."</li>"; // Affiche 30

        $j = 10;
        $j /= 5;
        echo "<li>".$j."</li>"; // Affiche 2

        $k = 20;
        $k %= 7;
        echo "<li>".$k."</li>"; // Affiche 6

        $o = "Bonjour";
        $o .= ", monde ! ";
        echo "<li>".$o."</li>"; // Affiche "Bonjour, monde !"
        $o .= $o; // similaire à "$o = $o . $o"
        echo "<li>".$o."</li>"; // Affiche "Bonjour, monde ! Bonjour, monde !"

$x=100;
$y="100";
echo "<li>";
var_dump($x == $y);
echo"</li>";

echo "<li>";
var_dump($x === $y);
echo"</li>";

echo"<li>";
var_dump($x != $y);
echo"</li>";

echo"<li>";
var_dump($x !== $y);
echo"</li>";

$a=50;
$b=90;
echo"<li>";
var_dump($a > $b);
echo"</li>";

echo"<li>";
var_dump($a < $b);
echo"</li>";

?>
</ul>




</body>
</html>