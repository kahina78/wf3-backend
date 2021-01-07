<DOCTYPE html>
<html lang="fr">
<head>
<meta charset= "UTF-8">
<meta name="viewport" content="width=device=width, initial-scale=1;0">
<title>Boucles</title>
<link rel="stylesheet" href="">

</head>




<body>
    
<?php
   $mon_age=44;
   $ma_taille=178;
   $mon_prenom="Christian";
   $mon_nom="Formateur";
   //a quoi ça sert, une boucle?
   // .................for............
   for($i=0; $i<5; $i++) /*initialisation; condition; 
   "incrementation" dans cet ordre impérativement*/
   {
       //ce qu'on doit répéter
       echo "<p>Coucou</p>";
   }
//exemple de boucles for
     $number= 11;
 for($i=$number; $i>0; $i-=2)
 {
     echo $number."";
     $number-=2;
 }
     $number=11;
 //ou autre façon de faire: (plus courte)
 for($i=$number; $i>0; $i-=2)
 {
     echo $i.""."<br/>";
 }
  //...............while.............

    $bobo=-5;
  while($bobo<0)
  {
     
      echo"<p>aie aie aie".$bobo."</p>";
      $bobo++;
  }


  //.............do while............
     $yes=1;
    do 
      {
        echo "<p>hé oui, je suis bien passé dans la boucle !!! </p>"; //au moins un passage dans la boucle
      }
    while($yes>5);
     $nope=1;
    while($nope>5)
     {
       echo "<p>ouille</p>";//ne s'affichera pas
    $nope++;
     }
  ?>

 

















</body>





</html>