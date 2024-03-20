<?php
        $jogador = $_POST['opcao'];
        $oponente = rand(1,3);

        switch ($jogador) {
            case 1:
                echo "Jogador: oponente:<br><img src='pedra.jpg' width='50px'>";
                break;
            case 2:
                echo "Jogador:oponente:<br><img src='papel.jpg' width='50px'>";
                break;
            case 3:
                echo "Jogador: oponente:<br><img src='tesoura.jpg' width='50px'>";
                break;
            default:
                break;  
        }   
        switch ($oponente) {
            case 1:
                echo "<img src='pedra.jpg' width='50px'>";
                break;
            case 2:
                echo "<img src='papel.jpg' width='50px'>";
                break;
            case 3:
                echo "<img src='tesoura.jpg' width='50px'>";
                break;
            default:
                break;  
        }

    if ($jogador == $oponente) {
        echo "<br>Empate";
    }elseif(($jogador == 1 and $oponente == 2) or ($jogador == 2 and $oponente == 3) or ($jogador == 3 and $oponente == 1)) {
        echo "<br>perdeu";
    }else{
        echo "<br>Ganhou";
    }
?>
