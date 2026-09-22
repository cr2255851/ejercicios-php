<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-encuesta.css">
    <title>Resultados</title>
</head>
<body>
    <p>
        <?php 
            $op1 =0;
            $op2 =0;
            $op3 =0;
            $op4 =0;
            $op5 =0;
            //variables del archivo para su proxima utilizacion
            $archivo = "resultado.txt";
            //abrimo el archivo como escritura
            $fp = fopen("$archivo", "a+");
            //grabamos el contenidpo con el // para poder separarlos
            $w = fputs($fp, "$_POST[voto]//");
            //volvemos a abrir el archivo
            $fp = fopen("$archivo", "r");
            //leemos el contenido del archivo
            $resultado = fread($fp, filesize($archivo));
            //sepaamos el contenido por el simbolo//
            $div = explode("//", $resultado);
            //contamos el total de votos
            $total = count($div) -1;
            //for, para sumar ++voto
            for ($i =0; $i < $total; $i++){
                if ($div[$i] == "v1") {
                    $op1++;
                }
                if ($div[$i] == "v2") {
                    $op2++;
                }
                if ($div[$i] == "v3") {
                    $op3++;
                }
                if ($div[$i] == "v4") {
                    $op4++;
                }
                if ($div[$i] == "v5") {
                    $op5++;
                }
            }
            $p1 = $op1 * 100 / $total;
            $p2 = $op2 * 100 / $total;
            $p3 = $op3 * 100 / $total;
            $p4 = $op4 * 100 / $total;
            $p5 = $op5 * 100 / $total;
        ?>
    </p>
    <h1>Participacion <?= $total; ?></h1>
    <table>
        <tr>
            <th>Postres</th>
            <th>Porcentajes</th>
            <th>Respresentante</th>
        </tr>
        <tr>
            <td>Torta de chpcolate</td>
            <td><?php echo $op1. " ".round($p1, 2)?> %</td>
            <td><div style="width: <?php echo round($p1, 2) ?>%; background-color: Tomato"></div></td>
        </tr>
        <tr>
            <td>Torta de tres leches</td>
            <td><?php echo $op2. " ".round($p2, 2)?> %</td>
            <td><div style="width: <?php echo round($p2, 2) ?>%; background-color: Orange"></div></td>
        </tr>
        <tr>
            <td>Quesillo</td>
            <td><?php echo $op3. " ".round($p3, 2)?> %</td>
            <td><div style="width: <?php echo round($p3, 2) ?>%; background-color: DodgerBlue"></div></td>
        </tr>
        <tr>
            <td>Torta selva negra</td>
            <td><?php echo $op4. " ".round($p4, 2)?> %</td>
            <td><div style="width: <?php echo round($p4, 2) ?>%; background-color: MediumSeaGreen"></div></td>
        </tr>
        <tr>
            <td>Pie de limon</td>
            <td><?php echo $op5. " ".round($p5, 2)?> %</td>
            <td><div style="width: <?php echo round($p5, 2) ?>%; background-color: SlateBlue"></div></td>
        </tr>
    </table>
</body>
</html>