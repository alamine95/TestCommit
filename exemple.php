<?php
$tab=array();
$tab[0]=rand(0,20);
$tab[1]=rand(0,20);
$tab[2]=rand(0,20);
$tab[3]=rand(0,20);
$tab[4]=rand(0,20);
$tab[5]=rand(0,20);
$tab[6]=rand(0,20);
$tab[7]=rand(0,20);
$tab[8]=rand(0,20);
$tab[9]=rand(0,20);

print_r($tab);
echo "<br>";
$moyen=array_sum($tab)/10;
echo "<br> la moyen est:";
echo "$moyen";

foreach($tab as &$chiffre){
	if ($chiffre>=$moyen) {
		echo "Les notes supérieur ou egale a la moyen'<br>'";
		// echo "$chiffre";
		$liste=$chiffre;
		echo "<br>";
		echo "<br>";

		echo "<lu><li>$liste</li></lu>";
	}
	}
// foreach($tab as &$chiffre){
// 	if ($chiffre>=10) {
// 		echo "Les notes supérieur ou egale a la moyen'<br>'";
// 		echo "$chiffre";
// 	echo '<br>';
// 	}

// 	}