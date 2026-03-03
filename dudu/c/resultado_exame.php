<?php
$mf = $_POST['media'];

if ($mf <= 1.7) {
    echo "Aluno não pode realizar o exame.";
} elseif ($mf >= 7.0) {
    echo "Aluno APROVADO.";
} else {
    $ne = (50 - ($mf * 6)) / 4;
    echo "Nota necessária no exame: " . number_format($ne, 2);
}
?>