<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Conversor de Monedas</title>

    <style>
    form span {
        display: block;
        float: left;
        width: 180px;
    }

    input {
        text-align: right;
    }
    </style>
</head>

<body>
    <h1>Conversor de Monedas</h1>
    <? require("convertidor.php"); ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <span>Valor de conversión</span>
        <input type="text" name="conversion" value="<?php echo $conversion; ?>">

        <br><span>Dollares</span>
        <input type="text" name="aconvertir" value="<?php echo $aconvertir; ?>">

        <br><span>Soles</span>
        <input type="text" name="resultado" readonly value="<?php echo number_format(
            $resultado,
            2,
            '.',
            ','
        ); ?>">

        <p><input type="submit" value="Calcular"></p>
    </form>
</body>

</html>