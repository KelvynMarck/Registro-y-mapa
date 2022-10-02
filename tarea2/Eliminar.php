<?php

$f = $_GET['f'];

if(file_exists('data/' .$f)) {
    unlink('data/' .$f);
}

header('location: Registro.php')

?>

