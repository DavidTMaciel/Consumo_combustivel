<?php

$mensagem ="";


if ($_POST){

    $distancia = $_POST['distancia'];
    $autonomia = $_POST['autonomia'];

    if(is_numeric($distancia) && is_numeric($autonomia)){

        if($distancia > 0 && $autonomia > 0){

            $valorGasolina = 5.34;
            $valorAlcool = 4.20;
            $valorDiesel = 3.90;

            $calculoGasolina = ($distancia / $autonomia) * $valorGasolina;
            $calculoGasolina = number_format($calculoGasolina, 2, ',','.');

            $calculoAlcool = ($distancia / $autonomia) * $valorAlcool;
            $calculoAlcool = number_format($calculoAlcool, 2, ',', '.');

            $calculoDiesel = ($distancia / $autonomia) * $valorDiesel;
            $calculoDiesel = number_format($calculoDiesel, 2, ',','.');
            
            $mensagem.= "<div class='sucesso'>";
            $mensagem.= "O valor total gasto será de:";
            $mensagem.= "<ul>";
            $mensagem.= "<li>Valor do consumo em R$ para gasolina foi de : <strong>R$" .$calculoGasolina."</strong></li>";
            $mensagem.= "<li>Valor do consumo em R$ para Alcool foi de : <strong>R$" .$calculoAlcool."</strong></li>";
            $mensagem.= "<li>Valor do consumo em R$ para Disel foi de : <strong>R$" .$calculoDiesel."</strong></li>";
            $mensagem.= "</ul>";
            $mensagem.="</div>";

        }
        else{
            $mensagem.= "<div class='erro'>";
            $mensagem.= "<p>O valor da distancia e da autonomia deve ser maior que 0</p>";
            $mensagem.= "</div>";
        }

}
else{
    $mensagem.= "<div class='erro'>";
    $mensagem.= "O valor recedido não é numero";
    $mensagem.= "</div>";
        
    }
}
else{
    $mensagem.= "<div class='erro'>";
    $mensagem.= "<p>Nenhum dado foi recebido pelo Formulario</p>";
    $mensagem.= "</div>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculo de Consumo de Combustível</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<main>
		<div class="painel">
			<h2>Resultado do cálculo de consumo</h2>
			<div class="conteudo-painel">
				<?php
				echo $mensagem;
				?>
				<a class="botao" href="index.php">Voltar</a>
			</div>
		</div>
	</main>
</body>
</html>





