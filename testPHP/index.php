<?php
//Exercice 1
echo"Exercice 1<br/>";
 $note_maths = 15;
 $note_francais = 12;
 $note_histoire_geo = 9;

//(note1 + note2 +note3) / nbre de note
 $moyenne = ($note_maths + $note_francais + $note_histoire_geo)/3;
 echo 'La moyenne est de '.$moyenne.' / 20.';
?>
<br>
<?php
//Exercice 2
 $prix_ht = 50;
 $tva = 20;
 $prix_ttc = $prix_ht*(1+ $tva /100) ;
 echo 'Le prix TTC du produit est de' .$prix_ttc. '€.<br>';//TTC
?>
<?php
$test= "42";
var_dump($test);
$sexe ="male";
if ($sexe == "male")// si le sexe est strictement egal a male
{
    echo "le sexe est male <br/>";
}
else// sinon

{
    echo "il ne s'agit pas de male <br/>";
}
$budget =553.89;
$achats = 1554.76;
if($budget >= $achats)
{
    echo "le budget est suffisant<br/>";
}
else
{
    echo "le budget n'est pas suffisant<br/>";
}
?>



