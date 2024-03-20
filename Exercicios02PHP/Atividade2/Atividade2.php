<?php
        $numero = $_POST['numero'];
        $numero = $numero % 2;

        if($numero == 0){
            echo "número digitado é par";
        }else{
            echo "número digitado é impar";
        }
?>
