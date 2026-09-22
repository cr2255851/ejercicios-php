<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-encuesta.css">
    <title>Encuesta</title>
</head>
<body>
    <h1>Postre favoritos</h1>
    <form action="resultados-encuesta.php" method="post" id="form1" name="form1">
        <ul>
            <li>
                <label for="voto">
                    <input type="radio" name="voto" value="v1">
                    Torta de chocolate
                </label>
            </li>
            <li>
                <label for="voto">
                    <input type="radio" name="voto" value="v2">
                    Torta de tres leches
                </label>
            </li>
            <li>
                <label for="voto">
                    <input type="radio" name="voto" value="v3">
                    Quesillo
                </label>
            </li>
             <li>
                <label for="voto">
                    <input type="radio" name="voto" value="v4">
                    Torta selva negra
                </label>
            </li>
             <li>
                <label for="voto">
                    <input type="radio" name="voto" value="v5">
                    Pie de limon
                </label>
            </li>
        </ul>
        <input type="submit" value="button" id="button" value="Votar">
    </form>
    
</body>
</html>