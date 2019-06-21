<?php
require('C:/wamp64/www/AtHome/model/model_trame.php');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=009E");
//http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=009C&TRAME=1009C2102
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);


//curl_close($ch);

$data_tab = str_split($data,33);
echo "Tabular Data:<br />";
for($i=0, $size=count($data_tab); $i<$size; $i++){
	$trame = $data_tab[$i];
	// décodage avec des substring
	$t = substr($trame,0,1);
	$o = substr($trame,1,4);
	// …
	// décodage avec sscanf
	list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
	sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
	if (!exists($year, $month, $day, $hour, $min, $sec)){
		try{
			add_trame($t, $o, $r, $c, $n, hexdec($v), $a, $x, $year, $month, $day, $hour, $min, $sec);
		}
		catch(Exception $e){

		}
	}
	echo("<br />Trame $i: $t $o $r $c $n $v $a $x $year $month $day $hour $min $sec<br />");


}
delay(10);
echo "<script> window.location.replace('routeur.php?cible=controller_trame');</script>";
?>
