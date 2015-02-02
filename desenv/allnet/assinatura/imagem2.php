<?php

// informa ao browse que se trata de uma imagem
header("Content-type: image/png");
header("Content-Disposition: inline; filename=signature_allnet.png");

// imagem de fundo da assinatura

$i = imagecreatefrompng("logo_sign.png");

// definicacao da cor

//$preto = imagecolorallocate($i, 0,0,0); # Cor preta
$branco = imagecolorallocate($i, 255,255,255); # Cor branco

//fonte utilizada(TTF)

$fonte = "tt1159m.ttf"; 

//textos padrao ($_POST)

$url = "www.allnetgroup.com.br";

// aqui e imagen, tamanho da fonte , angulo , x , y , cor , fonte(ttf) , texto  
/*
imagettftext($i, 14, 0, 255, 20,$branco,$fonte,$_POST["nome"]);
imagettftext($i, 10, 0, 255, 38,$branco,$fonte,$_POST["setor"]);
if (!empty ($_POST["celular"])){
	imagettftext($i, 10, 0, 255, 58,$branco,$fonte,"Cel: +55 " . $_POST["celular"]);
}
if (!empty ($_POST["nextel"])){
	imagettftext($i, 10, 0, 255, 78,$branco,$fonte,"ID: 55*".$_POST["nextel"]);
}
imagettftext($i, 10, 0, 255, 96,$branco,$fonte,$_POST["email"]);
imagettftext($i, 10, 0, 255, 111,$branco,$fonte,$url);
*/
imagettftext($i, 13, 0, 255, 18,$branco,$fonte,$_POST["nome"]);
imagettftext($i, 10, 0, 255, 32,$branco,$fonte,$_POST["setor"]);
if (!empty ($_POST["comercial"])){
	imagettftext($i, 10, 0, 255, 47,$branco,$fonte,"Com: +55 " . $_POST["comercial"]);
}
if (!empty ($_POST["celular"])){
	imagettftext($i, 10, 0, 255, 62,$branco,$fonte,"Cel:   +55 " . $_POST["celular"]);
}
if (!empty ($_POST["nextel"])){
	imagettftext($i, 10, 0, 255, 77,$branco,$fonte,"ID:      55*".$_POST["nextel"]);
}
imagettftext($i, 10, 0, 255, 92,$branco,$fonte,$_POST["email"]);
imagettftext($i, 10, 0, 255, 107,$branco,$fonte,$url);



//Gerar imagem

imagepng($i);

//Libera memoria

imagedestroy($i);

?>