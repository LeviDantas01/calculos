<?php   

$mediaPortuges = filter_input(INPUT_POST,"mediaPortuges",FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$mediaMatematica = filter_input(INPUT_POST,"mediaMatematica",FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$mediaHistoria = filter_input(INPUT_POST,"mediaHistoria",FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$mediaFisica = filter_input(INPUT_POST,"mediaFisica",FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$mediaGeografia = filter_input(INPUT_POST,"mediaGeografia",FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

  function media($n1, $n2, $n3, $n4, $n5){
    return ($n1 + $n2 + $n3 + $n4 + $n5) / 5; 
  }

  function meidaPonderada($n1, $n2, $n3, $n4, $n5,){
    $p1 = 3;$p2 = 2;$p3 = 1;$p4 = 2;$p5 = 2;
    return (($p1*$n1) + ($p2*$n2) + ($p3*$n3) + ($p4*$n4) + ($p5*$n5)) / ($p1 + $p2 + $p3 + $p4 + $p5);
    }

    function maiorValor($n1, $n2, $n3, $n4, $n5){
      return max($n1, $n2, $n3, $n4, $n5);
    }

    function menorValor($n1, $n2, $n3, $n4, $n5){
      return min($n1, $n2, $n3, $n4, $n5);
    } 

        
?>