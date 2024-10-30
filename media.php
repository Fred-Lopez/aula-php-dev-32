<?php
    $nota_1 = 10;
    $nota_2 = 1;
    $nota_3 = 2;
    $nota_4 = 5;

    $media = ($nota_1 + $nota_2 + $nota_3 + $nota_4) / 4;

    if ($media >= 7) {
        echo "Média: $media. APROVADO";
    }
    else if ($media >= 4) {
        echo "Média: ".round($media). ". EXAME";
    }
    else {
        echo "Média: $media. REPROVADO";
    }
?>