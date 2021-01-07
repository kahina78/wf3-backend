<!-- emmet plugin raccourci: ! puis tab permet de générer l'entete HTML-->
<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" href="">
<meta name="viewport" content="width=device=width, initial-scale=1;0">
<meta charset= "UTF-8">
<title>Document</title>
</head>
<body>
    

<!-- ul>li*4>a>lorem3 -->
<ul>
    <li><a href="">Lorem ipsum dolor sit.</a></li>
    <li><a href="">Ut modi qui deserunt?</a></li>
    <li><a href="">Minima culpa blanditiis non!</a></li>
</ul>
<!--img-->
  <img src="" alt="">
<!-- type de variable: chaines de caractere/(nombre) entiers/ boolenens/ float/tableaux -->
<?php
//variables
    $mon_age=44;
    $ma_taille=178;
    $mon_prenom="Christian";
    $mon_nom="Formateur";
    $phrase='tu t\'es réveillée à quelle heure?';
    $majorite=true; //booleene false ou true
    $mon_age=$mon_age+1; //$mon_age=45
    $mon_age+=1;//$mon_age=46
    $mon_age+=5; //$mon_age=51
    $mon_age-=10; //$mon_age=41
    $mon_age*=2; //$mon_age=82
    $mon_age/=4; //$mon_age=20.5


    $mon_age=$mon_age+1; //21.5 
    $mon_age+=1; //22.5
    $mon_age++; //23.5
    $mon_age--; //22.5
    echo $mon_age;

?>

<h1>coucou</h1>

<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad nisi ducimus odio reprehenderit, veritatis incidunt quibusdam sunt. Enim, molestias numquam! Officia voluptates reiciendis molestiae quasi quae quod nulla et possimus.</p>


<?php
    $mon_age+=10;
       echo $mon_age; //32.5
//la concatenation, c'est comme apprendre a lire B-A BA
    $identite=$mon_nom." ".$mon_prenom;
    echo"<h2>Bonjour, je m'appelle".$identite.", ça va ?</h2>";
?>
<!--   echo"<h2>Bonjour, je m'appelle".$identite.", ça va ?</h2>"; (est la meme chose que ) <h2>Bonjour,je m'appelle <?php echo $identite?>, ça va?</h2> -->

<h2>Bonjour,je m'appelle <?php echo $identite?>, ça va?</h2>

<?php

     $age_user=15;

         echo "<h3>Début du test</h3>";

     if ($age_user>=17)
     {
           //dans le cas ou la condition est vraie 
            echo "<p>Vous etes majeur</p>";
     } 
     else 
     {
            echo"<p>Vous etes mineur</p>";
     }

          echo "<h3>Fin du test</h3>";
//........................................................
     $un_nbre=0;

         echo "<h3>Début du test nombre</h3>";

     if ($un_nbre>0)
     {
           //dans le cas ou la condition est vraie 
            echo "<p>Le nombre est positif</p>";
     } 
     elseif ($un_nbre<0)
     {
            echo"<p>Le nombre est negatif</p>";
     }
     else
     {
            echo"<p>Le nombre est nul</p>";
     }
          echo "<h3>Fin du test nombre</h3>";
          //........................
          $un_nbre=50;
          if ($un_nbre==0)

          {
                //dans le cas ou la condition est vraie 
                 echo "<p>Le nombre est nul</p>";
          } 
          elseif ($un_nbre<0)
          {
                 echo"<p>Le nombre est negatif</p>";
          }
          else
          {
                 echo"<p>Le nombre est positif</p>";
          }    
          //===

          $nombre=0;
          $fauxNombre="0";
          echo "<p>test double == ou ===</p>";
          if ($nombre==$fauxNombre)
          {
              echo "<p>oui, ils sont egaux</p>";
          }
          //dans ce cas, ce n'est pas strictement égal.
             //...............................
?>
<?php 

             // operateur logiques: le ET et le OU logique
             $sexe= "masculin"; //ou féminin 
             $age= 18;

             if ($sexe=="masculin" && $age>18)
             {
                 // esperluette (ou "et commercial") et donc && est equiv à AND
                 echo "<p>L'utilisateur est un homme majeur</p>";
             }
             // OU logique

             if ($sexe=="masculin" || $age>18)
             {
                 // double "pipe" et donc ||  est equiv à OR
                 echo "<p>ok, ça marche</p>";
             }
             //switch: quand l'utiliser?
             switch ($age)
             {
                 case 0:
                 case 1:
                 case 2:
                    echo "<p>c'est un bébé</p>";
                 break; 
                 case 3:
                 case 4:
                 case 5:
                    echo "<p>un enfant qui va en maternelle</p>";
                 break; 
                 case 6:
                    echo "<p>un enfant qui va au cp</p>";
                 break; 
                 default :
                    echo "<p>un enfant qui est plus grand que 6ans</p>";
             }
?>











</body>
</html>