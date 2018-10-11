<?php
include_once('Carte.php');
include('Joueur.php');
$paquet=[];
for ($i=1;$i<11;$i++) {
    $paquet[$i]=new Carte($i,"carte/$i.jpg");
}

echo"<br>";
$joueur1=new Joueur("Paul");
$joueur2=new Joueur("John");
$sum1=0;
$sum2=0;
for($j=1;$j<5;$j++){
    $rand1=array_rand($paquet,1);
    $rand2=array_rand($paquet,1);
    echo "l\' iteration numero".$j."<br>";
    $paquet[$rand1]->showCarte();
    $paquet[$rand2]->showCarte() ;
    echo"<br>";
   if($rand1< $rand2){
       $sum2++;
   }
   elseif ($rand1> $rand2){

       $sum1++;
       }
}

if ( $sum2< $sum1){
    echo "le joueur " .$joueur1->getNom(). " gagne <br>";
}
elseif ($sum2> $sum1){
    echo "le joueur " .$joueur2->getNom()." gagne <br>";

}
else{
   echo"non gangnat <br>" ;
}