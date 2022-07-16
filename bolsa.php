<?php

$mensalidade = 1200;
$cor = "escura";

if($cor == "escura"){

	$md = $mensalidade - ($mensalidade * 0.25);
	echo "voce ganhou um desconto de 25% e pagara ".$md." R$";
	echo "<br>";

}else{

	$md = $mensalidade - ($mensalidade * 2.75/100);
	echo "voce ganhou um desconto de 2.57% e pagara ".$md." R$";
	echo "<br>";
}


?>