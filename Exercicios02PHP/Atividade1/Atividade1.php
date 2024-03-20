<?php
        $numero = $_POST['numero'];

        if($numero == 0){
            echo "Igual a Zero";
        }elseif ($numero < 0) {
            echo "Valor Negativo";
        }else{
            echo "Valor Positivo";
        }
?>
