<?php
# valor de conversión
if (
    isset($_POST['conversion']) &&
    (is_numeric($_POST['conversion']) ||
        is_numeric(str_replace(',', '.', $_POST['conversion'])))
) {
    $conversion = str_replace(',', '.', $_POST['conversion']);
} else {
    $conversion = 4.12;
}

# valor a convertir
if (
    isset($_POST['aconvertir']) &&
    (is_numeric($_POST['aconvertir']) ||
        is_numeric(str_replace(',', '.', $_POST['aconvertir'])))
) {
    $aconvertir = str_replace(',', '.', $_POST['aconvertir']);
} else {
    $aconvertir = 0;
}

# calculo
$resultado = $conversion * $aconvertir;
?>