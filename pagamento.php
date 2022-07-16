 <?php

$valor = 1000;
$forma ="prazo";

if($forma == "avista"){

	$vf = $valor - ($valor * 0.10);
	echo "a compra foi avista";
	echo "<br>";
	echo "voce pagara> R$ ".$vf;
}else{

	$vf = $valor + ($valor * 0.05);
	echo "a compra foi a prazo";
	echo "<br>";
	echo "voce pagara> R$ ".$vf;
}




?>