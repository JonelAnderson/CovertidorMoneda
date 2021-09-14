<?php
# valor de conversión
if(isset($_POST["convertidor"]) && (is_numeric($_POST["conversion"]) || is_numeric(str_replace(",",".",$_POST["convertidor"]))))
{
    $convertidor=str_replace(",",".",$_POST["convertidor"]);
}else{
    $convertidor=4.13;
}
 
# valor a convertir
if(isset($_POST["aconvertir"]) && (is_numeric($_POST["aconvertir"]) || is_numeric(str_replace(",",".",$_POST["aconvertir"]))))
{
    $aconvertir=str_replace(",",".",$_POST["aconvertir"]);
}else{
    $aconvertir=0;
}
 
# calculo
$resultado=$conversion*$aconvertir;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Convertidor de Monedas</title>
 
    <style>
        form span {
            display:block;
            float:left;
            width:180px;
        }
        input {text-align:right;}
    </style>
</head>
 
<body>
    <h1>Convertidor de Monedas</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
 
        <span>Valor de conversión</span>
            <input type="text" name="convertidor" value="<?php echo $convertidor?>">
 
        <br><span>Dollares</span>
            <input type="text" name="resultado" readonly value="<?php echo number_format($resultado,2,".",",")?>">
 
        <p><input type="submit" value="Calcular"></p>
    </form>
</body>
</html>