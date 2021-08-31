<?php
    // Variabel Scope / Lingkup Variabel

    // Variabel diluar function
    $x = 10;
    
    // Variabel yang dibuat di dalam function hanya berlaku di function itu saja
    function tampilX() {
        // Jika diberikan keyword global maka akan mencari variabel global / diluar function
        global $x;
        echo $x;
    }

    tampilX();
    // echo "<br>";
    // echo $x;

    // Superglobals
    // Variabel global milik PHP merupakan arraya assosiative
    // echo $_SERVER["SERVER_NAME"];    
?>