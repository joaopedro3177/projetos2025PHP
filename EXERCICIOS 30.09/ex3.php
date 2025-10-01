<?php 

$notaTotal = 0;
$maior = 0;
$menor = 0;
$nota = [5,10,8,4,3,8,9,4,5,5];
$nome = ['claudiosvaldo', 'ribamar', 'Jurubeba', 'Tabajara', 'Madruga', 'Aurivan','China', 'João cirilo', 'Uelson', 'Richard'];


for ($cont = 0; $cont <10; $cont++ ){
   $notaTotal += $nota[$cont];
    $atual = $nota[$cont];

if ($atual > $maior){
    $maior = $atual;

}






}
print " <br> Maior nota:  " . $maior;
print " <br> Média da classe:  ". $notaTotal/10;
$posemaior = array_search($maior,$nota);

print " <br> aluno com a maior nota: ". $nome[$posemaior];
?>