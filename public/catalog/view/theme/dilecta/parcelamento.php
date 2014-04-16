<?php
/*
  Configuracoes do sistema de parcelamento
  ----------------------------------------
  $qtd_parcelas = Define a quantidade de parcelas a ser exibida para os produtos
  $juros = Taxa de juros mensal (deixe em 0 para parcelamento sem juros)
  $moeda_da_loja = Permite especificar a moeda utilizada na loja

  $tipo_de_calculo = Permite escolher o tipo de calculo a ser utilizado
  0 = Juros simples (Pagamento Digital)
  1 = Tabela Price (PagSeguro e outros)
*/

$qtd_parcelas = 11;
$parcela_minima = 5;
$parcelas_sem_juros = 1;
$juros = 1.99;
$moeda_da_loja = 'R$ ';
$tipo_de_calculo = 1;

if (!$product['special']) {
  $preco_numero = str_replace(',','.',str_replace('.','', str_replace($moeda_da_loja,"",strip_tags($product['price']))));
} else {
  $preco_numero = str_replace(',','.',str_replace('.','', str_replace($moeda_da_loja,"",strip_tags($product['special']))));
}

// Calcula o valor da parcela de acordo com o tipo de calculo utilizado
if ($tipo_de_calculo == 0) {
  $valor_parcela = ($preco_numero * pow(1+($juros/100), $qtd_parcelas))/$qtd_parcelas;
}
if ($tipo_de_calculo == 1) {
  $valor_parcela = ($preco_numero * ($juros/100))/(1-(1/(pow(1+($juros/100), $qtd_parcelas))));
}

echo $valor_parcela;

// Escreve a parcela se ela for maior do que a parcela minima
if ($valor_parcela <= $parcela_minima) {
	$valor_parcela = number_format($valor_parcela, 2, ',', '.');
	if ($p <= $parcelas_sem_juros) {
		echo '<span style="color: 4d4d4d;">' . $p . 'x de ' . $moeda_da_loja . $valor_parcela . ' sem juros</span><br />';
	} else {
		echo $p . 'x de ' . $moeda_da_loja . $valor_parcela . ' com juros<br />';
	}
}

// Exibe as frases de parcelamento
//echo '<br />ou ' . $qtd_parcelas . 'x de ' . $moeda_da_loja . number_format($valor_parcela, 2, ',', '.');
if ($juros == 0) { echo '<br />sem juros'; } else { echo '<br />com juros de ' . $juros . '% ao m&ecirc;s'; }

?>
