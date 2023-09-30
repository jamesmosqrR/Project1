<?php
    echo "<h1>ALGORITMOS DE ENCRIPTACION</h1>";

    $password = "pepitop"; // 317e365b8d7c21f0796c98b21e416704
    $password2 = "JamesNKMR";
    echo md5 ($password)."<br>"; //crear

    //hash (algoritmo, string)
    foreach (hash_algos() as $algoritmo) {
        echo $algoritmo. '  : ' .hash($algoritmo,$password)."<br>";
    }
    //password hash (algoritmo, string)
    // echo password_hash($password, PASSWORD_DEFAULT,['cost' =>10])
   
    
    $hash = password_hash($password, PASSWORD_DEFAULT,['cost' =>10]);
    echo $hash."<br>";
    
    //password verify ()
    if (password_verify($password,$hash)) {
       echo "Password es correcto";
    }else {
        echo"La contraseña no coincide con el hash.";
    }

    // var_dump(password_hash(hash));
?>