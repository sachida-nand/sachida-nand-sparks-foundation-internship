<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DB','sparkbanking');
    $conn = mysqli_connect(HOST,USER,PASSWORD,DB) or die('Not connected to the server');
?>