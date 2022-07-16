<?php


$valor = 23000;

if($valor >= 65000){

	$pib = $valor * 0.0375;
	$confins = $valor * 0.0575;
	$reven = $valor * 0.02289;
	$total = $valor + $pib + $reven + $confins;

	echo $total;

}else{

	$pib = $valor * 0.0125;
	$confins = $valor * 0.0375;
	$reven = $valor * 0.1235;
	$total = $valor + $pib + $reven + $confins;

	echo $total;
}



?>