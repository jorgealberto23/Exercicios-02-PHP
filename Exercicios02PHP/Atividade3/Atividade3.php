<?php
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        if($numero1 > $numero2){
            echo "A maior que B";
        }else{
            echo "A menor que B";
        }
?>