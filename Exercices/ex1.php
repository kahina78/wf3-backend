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

        $x = 100;
        $y = "100";
        echo "<li>";
            var_dump($x == $y); // "valeur égale à"
        echo "</li>";

        echo "<li>";
            var_dump($x === $y); // "valeur et type égaux à"
        echo "</li>";

        echo "<li>";
            var_dump($x != $y); // "valeur différente de"
        echo "</li>";

        echo "<li>";
            var_dump($x !== $y); // "valeur et types différents de"
        echo "</li>";

        $a = 50;
        $b = 90;
        echo "<li>";
            var_dump($a > $b); // "strictement supérieur à"
        echo "</li>";

        echo "<li>";
            var_dump($a >= $b); // "supérieur ou égal à"
        echo "</li>";

        echo "<li>";
            var_dump($a < $b); // "strictement inférieur à"
        echo "</li>";

        echo "<li>";
        var_dump($a <= $b); // "inférieur ou égal à"
    echo "</li>";
    ?>
</ul>

<h2>Exemple h&nbsp;: les opérateurs logiques </h2>
<ul>
    <li><?php var_dump(true AND false); // ET ?></li>
    <li><?php var_dump(true OR false); // OU ?></li>
    <li><?php var_dump(true && false); // ET ?></li>
    <li><?php var_dump(true || false); // OU ?></li>
    <li><?php var_dump(!true); // NON (ici : NON VRAI, soit FAUX) ?></li>
    <li><?php var_dump(!false); // NON (ici : NON FAUX, soit VRAI) ?></li> 
</ul>

<h2> Exemple i&nbsp;: les conditions </h2>


<?php
    $x = 3;
    echo "<p>";
    if ($x >= 10) { // 10 et +
        echo "Bonjour&nbsp;!";
    } elseif ($x < 5) {
        echo "Salut&nbsp;!"; // 0, 1, 2, 3 ou 4
    } else {
        echo "Rien à faire."; // 5, 6, 7, 8, 9
    }


    $favcolor = "red";
    echo "<p>";
    switch ($favcolor) {
        case "red":
            echo "Votre couleur préférée est le rouge&nbsp;!";
        break;
        case "blue":
            echo "Votre couleur préférée est le bleu&nbsp;!";
        break;
        case "green":
            echo "Votre couleur préférée est le vert&nbsp;!";
        break;
        default:
            echo "Vous n’avez pas de couleur préférée&nbsp;!";
    }
    echo "</p>";

    $x = 1;

    echo "<ul>";
    while($x <= 5) {
        echo "<li>$x</li>";
        $x++;
    }
    echo "</ul>";
?>

<?php

    $x = 1;

    echo "<ul>";
        do {
        echo"<li>$x</li>";
            $x++;
        } while($x <= 5);
        echo "</ul>";

    echo "<ul>";
        for ($i = 1; $i <= 5; $i++) {
            echo "<li>$i</li>";
        }
        echo "</li>";
    
    /* TP 1
    - Déclarer une variable $x = 1 et une variable $y = 835
    - En utilisant la boucle "while" ajoutez successivement 1 à x
      jusqu'à qu'il soit égale à y. Dans ce cas, affichez x et y
    - Donnez une variante de cette boucle avec la boucle do... while
    - Ecrivez une boucle qui affiche les multiples du nombre 7 inférieurs à 1000
    - Utilisez la boucle for pour tester si le nombre 3457 est premier
*/
?>
    <p>Affectation d'une variable</p>

    <?php

     $x = 1;
     $y =835;
     echo "<ul>";
     while ($x < $y) {
         $x++;
     }
     echo "<li> $x </li>";
     echo "<li> $y </li>";

     echo "</ul>";

     ?>

     <P>Donner une variante de cette boucle avec la boucle do... while </p>

     <?php

     $x = 1;
     $y =835;
     echo "<ul>";
     do {
         $x++;
     }

     while ($x < $y);
     echo "<li> $x </li>";
     echo "<li> $y </li>";

     echo "</ul>";
     ?>

     <p>Ecrire une boucle qui affiche les multiples du nombre 7 inférieurs à 1000</p>

  
    $x = 14;
    $y = 7;
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

        $a = 0;
        $b = 1000;
       
        echo "<li>";
            var_dump($a < $b); // "strictement inférieur à"
        echo "</li>";


    ?>
   </ul>

 <p>Utilisez la boucle for pour tester si le nombre 3457 est premier</p>
    

     <?php

     echo "<p>";
     $j=3457;
     for ($i =2; $i <= $j; $i++) {
        if ($j % $i == 0 && $j!=$i){
         echo $j. "n'est pas un nombre premier";
         break;
        }
     else if ($i==$j) {
        echo $j. "est un nombre premier";
        } 
    }  
       

     echo "</p>";

     ?>

<h2>Les tableaux et les fonctions: utilisation du type array</h2>

    <?php

    $cars[0] = "Dacia";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";

    $cars = ["Dacia", "BMW", "Toyota"]; // similaire aux 3 lignes précédentes
    $cars = array("Dacia", "BMW", "Toyota", "Peugeot"); // similaire à la ligne précédente

    $cars[] = "Renault";  // permet d'ajouter un élément en fin de tableau
    $cars[] = "Mercedes";
    echo "<p>".$cars[0]." et ".$cars[2]."</p>";
    $cars[2] = "Mitsubishi";
    echo "<p>".$cars[0]." et ".$cars[2]."</p>";

    echo "<p>".count($cars)."</p>"; // fonction count($variable) qui permet de mesurer la taille d'une variable

    // PARCOURS DE TABLEAU
   $taille = count($cars);
    echo "<ol type='A' reversed>";
    for($i = 0; $i < $taille ;$i++) {
    echo "<li>".$cars[$i]."</li>";
   }
   echo "</ol>";


   ?>
   <!-- Exemples d'utilisation correcte de 'ul' et 'ol' -->
<h2> Ma recette de gateau </h2>

    <ul>
      <h3> Ingrédients : </h3>
      <li> 100g de farine </li>
      <li> 10g de sucre </li>
      <li> 3 carrés de chocolat </li>
    </ul>
    <ol>
      <h3> Réalisation : </h3>
      <li> bla bla </li>
      <li> bla bli blou</li>
      <li> bla bli blo</li>
    </ol>

<h2>Les tableaux associatifs</h2>
    <?php
     
     $age= array("0"=>"27", "Fatima"=>"37", "Rida"=>"43");

      echo "<p>".$age["Fatima"]."</p>";
      echo "<p>".$age["Rida"]."</p>";
      echo "<p>".$age["0"]."</p>";

      foreach ($age as $donneeAge) {
        echo "<p>".$donneeAge."</p>";
    }
      ?>

<?php
  /*Exercice :
    Écrire un tableau qui contient tous les mois de l'année puis l'afficher
    grâce aux 3 différentes boucles (for, while et do,while).

    Exercice :
    Écrire un tableau associatif, qui associe des pays à des capitales 
    (France, Norvège, Sénégal, Inde, Chine, Mexique).
    Afficher ces capitales grâce à un foreach.
    Exercice :
    Écrire un tableau x avec comme données "A", "B", "C" et "D".
    Un tableau y avec comme données "E", "F", "G" et "H"

    À l'aide d'une boucle de votre choix, mettre y à la suite de x.

    À l'aide d'une boucle de votre choix, afficher x.

    */
//exercice 1
$mois_de_lannee=["janivier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"];
echo "<ol>";
//boucle for
for($i =0; $i <=11 ;$i++) { // on parcoure tout le tableau
    echo "<li>".$mois_de_lannee[$i]."</li>"; 
    }
    echo "</ol><br>";
    $x=0;

//boucle while

    echo "<ul>";
    while($x<=11) {
    echo "<li>".$mois_de_lannee[$x]."</li><br>";
    $x++;
    }
    echo "</ul><br>";

//boucle do while
    $x=0;
echo "<ol type= 'A'>";
do {
echo "<li>".$mois_de_lannee[$x]."</li>";
$x++;
} while ($x<=11);
echo "</ol><br>";

//exercice 2
$tab=["France"=>"Paris","Norvege"=>"Oslo","Senegal"=>"Dakar","Inde"=>"New Delhi","Mexique"=>"Mexico"];
echo "<ul>";
foreach($tab as $key => $value) {
echo "<li>".$key." a pour capitale ".$value."</li>";
}
echo "</ul><br>";

/* Exercice :
Écrire un tableau x avec comme données "A", "B", "C" et "D".
Un tableau y avec comme données "E", "F", "G" et "H"

À l'aide d'une boucle de votre choix, mettre y à la suite de x.

À l'aide d'une boucle de votre choix, afficher x.
*/
$x=["A","B","C","D"];
$y=["E","F","G","H"];
foreach ($y as $value) {
    $x[]="$value";
}
echo "<ol type='A'>";
foreach ($x as $value){
    echo "<li>".$value."</li>";
}
echo "</ol>";
    
    ?>
  
<?php
$age = array("Zakaria"=>"27","Fatima"=>"37","Rida"=>"43");
    $age = array("Linda"=>"10","Zakaria"=>"27",
                "Fatima"=>"37","Rida"=>"43","Nadia"=>"15");
    echo "<ul>";
    foreach($age as $name=>$value) {
        echo "<li>".$name." a ".$value." printemps !"."</li>"; 
        echo "<li>".$name." a ".$value." printemps !"."</li>";
        if ($value <= 10) echo "<p>Enfant !</p>";
        else if ($value > 10 && $value < 18) echo "<p>Ado !</p>";
        else if ($value >= 30 && $value < 40) echo "<p>Alors, on a la trentaine ?</p>";
        else if ($value == 43) echo "<p>Tu t'apellerais pas Rida, par hasard ?</p>";
        else if ($value < 30 && $value >= 20) echo "<p>La vingtaine !</p>";
    }
    echo "</ul>";

    echo "<p>".print_r($age)."</p>"; // affiche le tableau avec + d'info (type, clés, valeurs...)

    $cars = array("Dacia", "BMW", "Toyota"); // création du tableau

    sort($cars); // tri dans l'ordre alphabétique
    echo "<p>".print_r($cars)."</p>"; // affichage

    $numbers=array(4,6,2,22,11); // création du tableau 
    sort($numbers); // tri dans l'ordre croissant
    echo "<p>".print_r($numbers)."</p>"; // affichage

    rsort($numbers); // tri dans l'ordre inverse (décroissant)
    echo "<p>".print_r($numbers)."</p>";


    $os = array("Mac", "NT", "Irix", "Linux"); // tableau des systèmes d'exploitation
 
    if (in_array("Irix", $os)) {
        echo "<p>J'ai Irix</p>";
    }
    if (in_array("mac", $os)) {
        echo "J'ai mac"; // ne s'affiche pas car sensible à la casse
    }

    $array1 = array("color" => "red", 2, 4, "size" => "tall", "yes", 7);
    echo "<p>". print_r($array1)."</p>";

    // Rappel "array_keys": https://www.php.net/manual/fr/function.array-keys.php
    echo "<p>". print_r(array_keys($array1))."</p>";

    $array2 = array("a", "B", "color" => "green", "shape" => "trapezoid", 4);
    $result = array_merge($array1, $array2);
    // tri des données : d'abord les "strings" et ensuite les "integers"
    sort($result);
    echo "<p>". print_r($result)."</p>";

    // LES FONCTIONS :
    function writeMsg($firstname, $name, $repetitions) { // definition de fonction

        for($counter = 1; $counter <= $repetitions; $counter++)
            echo "Hello ".$firstname." ".$name."!";

    }

    writeMsg("Sayah", "El Yatim", 3); // appel de fonction

    /* 1) Modifier la fonction writeMsg() pour qu'elle accepte 
    un troisème argument : l'entier $repetitions. 
    writeMsg() repetera le echo autant de fois que $repetitions
    Exemple : 
    writeMsg("oh", "ah", 3);
    Résultat :
    Hello oh ah!
    Hello oh ah!
    Hello oh ah!
    2) Écrire une fonction parapgraph() qui prend en argument une chaîne de caractères
    et qui l'entoure d'une balise <p>
    3) Modifier writeMsg() pour qu'elle appelle la fonction paragraph() afin 
    de renvoyer un résultat correct pour le web
    */

    



    ?>




</body>
</html>


