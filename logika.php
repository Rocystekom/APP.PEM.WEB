 <?php 
$a= true;
$b= false;

// variable $c akan bernilai FALSE

$c = $a && $b;
printf ("%b && %b = %b", $a,$b,$c);
echo "<hr>"; 

// variable C akan bernilai TRUE
$c = $a || $b;
printf ("%b || %b = %b", $a,$b,$c);
echo "<hr>"; 

// variable $c akan bernilai FALSE
$c = !$a;
printf("!%b=%b", $a,$c);
echo "<hr>"; 


?>