<?php

$password = "contraseña1";

foreach (hash_algos() as $algos) {
   echo $algos . ' : ' . hash ($algos, $password);
}

?>