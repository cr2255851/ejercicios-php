<?php
function sumar ($a, $b) {
    $c = $a + $b;
    return $c ;
}
echo sumar(2, 2);

?>

<?php 
    function foo(&$var){
        $var++;
    }
    $a=5;
    foo($a);
    echo $a
?>

