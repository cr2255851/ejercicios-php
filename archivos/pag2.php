<?php 
//error_reporting(0);
//if (isset($_FILES['foto'])) {
    copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
    echo "La foto se registro en el servidor.<br>";
    $nom=$_FILES['foto']['name'];
    //echo "<img src=\"$nom\">";
     echo "<img src=\"$nom\">";
//}

/*if (isset($_FILES['foto']) && $_FILES['foto']['size'] > 0) {
    $nom = $_FILES['foto']['name'];
    
    // Guardamos el archivo con su nombre original en la carpeta actual
    copy($_FILES['foto']['tmp_name'], $nom);
    
    echo "La foto se registro en el servidor.<br>";
    
    // Le indicamos al navegador que busque la imagen en la misma carpeta (./)
    echo "<img src='./$nom' width='300'>";
} else {
    echo "Por favor, selecciona una imagen antes de enviar.";
}*/

?>