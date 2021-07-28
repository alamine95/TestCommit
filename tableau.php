<?php 
$countries = array();
$countries[0] = array("paye"=>"Italy","Capital"=>"Rome");
$countries[1] = array("paye"=>"Luxembourg","Capital"=>"Luxembourg");
$countries[2] = array("Paye"=>"Belgium","Capital"=>"Brussels");
$countries[3] = array("Paye"=>"Denmark","Capital"=>"Copenhagen");
$countries[4] = array("Paye"=>"Finland","Capital"=>"Helsinki");
$countries[5] = array("Paye"=>"France","Capital"=>"Paris");
$countries[6] = array("Paye"=>"Slovakia","Capital"=>"Bratislava");
$countries[7] = array("Paye"=>"Germany","Capital"=>"Berlin");
$countries[8] = array("Paye"=>"Slovenia","Capital"=>"Ljubljana");
$countries[9] = array("Paye"=>"Greece","Capital"=>"Athens");
$countries[10] = array("Paye"=>"Ireland","Capital"=>"Dublin");
$countries[11] = array("Paye"=>"Netherlands","Capital"=>"Amsterdam");
$countries[12] = array("Paye"=>"Portugal","Capital"=>"Lisbon");
$countries[13] = array("Paye"=>"Spain","Capital"=>"Madrid");
$countries[14] = array("Paye"=>"Sweden","Capital"=>"Stockholm");
$countries[15] = array("Paye"=>"United Kingdom","Capital"=>"London");
$countries[16] = array("Paye"=>"Cyprus","Capital"=>"Nicosia");
$countries[17] = array("Paye"=>"Lithuania","Capital"=>"Vilnius");
$countries[18] = array("Paye"=>"Czech Republic","Capital"=>"Prague");
$countries[19] = array("Paye"=>"Estonia","Capital"=>"Tallin");
$countries[20] = array("Paye"=>"Hungary","Capital"=>"Budapest");
$countries[21] = array("Paye"=>"Latvia","Capital"=>"Riga");
$countries[22] = array("Paye"=>"Malta","Capital"=>"Valetta");
$countries[23] = array("Paye"=>"Austria","Capital"=>"Vienna");
$countries[24] = array("Paye"=>"Poland","Capital"=>"Warsaw");

$firstKey = array_key_first($countries);
echo "La premier colonne est $firstKey";
foreach ($countries as $country){

echo "<pre>";
echo print_r($country);
echo "</pre>";
}

?>