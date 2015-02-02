<?php

header("Content-type: image/png");
header("Content-Disposition: inline; filename=signature_allnet.png");

// imagem de fundo da assinatura ..

$i = imagecreatefrompng("logo_sign.png");

// definicacao da cor

//$preto = imagecolorallocate($i, 0,0,0); # Cor preta
$branco = imagecolorallocate($i, 255,255,255); # Cor branco

//fonte utilizada(TTF)

$fonte = "tt1159m.ttf"; 

//textos padrão ($_POST)

$url = "www.allnetgroup.com.br";

// aqui e imagen, tamanho da fonte , angulo , x , y , cor , fonte(ttf) , texto  

imagettftext($i, 14, 0, 270, 20,$branco,$fonte,$_POST["nome"]);
imagettftext($i, 11, 0, 270, 38,$branco,$fonte,$_POST["setor"]);
if (!empty ($_POST["celular"])){
	imagettftext($i, 11, 0, 270, 58,$branco,$fonte,"Cel: " . $_POST["celular"]);
}
if (!empty ($_POST["nextel"])){
	imagettftext($i, 11, 0, 270, 78,$branco,$fonte,"ID: 55*".$_POST["nextel"]);
}
imagettftext($i, 11, 0, 270, 96,$branco,$fonte,$_POST["email"]);
imagettftext($i, 10, 0, 270, 111,$branco,$fonte,$url);

//Gerar imagem

imagepng($i);

//Libera memoria

imagedestroy($i);

?>