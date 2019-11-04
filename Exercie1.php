<?php

echo "Choisir un index";

$N = trim(fgets(STDIN));
fibo($N);
function fibo($N){
$A = 0;
$B = 1;
$C = $A + $B;
 for($i=0;$i < $N; $i++){ 

 	 $A = $B;
 	 $B = $C;
 	 $C = $A + $B;

 	}
 	

 	return $A;
}

echo (fibo($N));


?>

