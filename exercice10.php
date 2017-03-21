#Exercice 10
Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.  
Cela pourra être, par exemple, de la forme : **"Le département" + nom_departement + "a le numéro" + num_departement**
<?php 
$HtFrance=array(
	'02'=>"Aisne",
	"59"=>"Nord",
	"60"=>"Oise",
	"62"=>"Pas de Calais",
	"80"=>"Somme"
	);
foreach($HtFrance as $key=>$value) { 

	
	var_dump("Le département ".$value." a pour numéro ".$key).'<br />';
}



?>