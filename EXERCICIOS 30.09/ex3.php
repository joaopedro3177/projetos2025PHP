<?php 

$notaTotal = 0;
$maior = 0;
$menor = 0;
$nota = [5,10,8,4,3,8,9,4,5,5];
$nome = ['claudiosvaldo', 'ribamar', 'Jurubeba', 'Tabajara', 'Madruga', 'Aurivan','China', 'João cirilo', 'Uelson', 'Richard', 'Lazaro '];


for ($cont = 0; $cont <10; $cont++ ){

if ($nota > $maior){
    $maior += $nota;
}

if ($menor < $maior){
    
}
 $notaTotal += $nota[$cont];


}

print "Média da classe: ". $notaTotal/10;
?>