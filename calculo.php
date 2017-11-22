<?php 

    $peso   = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = round( ( $peso / pow($altura, 2) ), 2 );


    if( $imc < 18.5 ) {
        echo "<br/>";
        echo "Ganho de peso ideal: <strong>13kg a 18kg</strong>.";
    } elseif ( $imc >= 18.5 && $imc < 25 ) {
        echo "<br/>";
        echo "Ganho de peso ideal: <strong>11.5kg a 16kg</strong>.";
    } elseif ( $imc >= 25 && $imc < 30 ) {
        echo "<br/>";
        echo "Ganho de peso ideal: <strong>7kg a 11,5kg</strong>.";
    } else {
        echo "<br/>";
        echo "Ganho de peso ideal: <strong>5kg a 9kg</strong>.";
    }

    echo "<br />";
    echo $imc;

 ?>