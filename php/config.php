<?php

    $servername="sql203.infinityfree.com";
    $username="if0_34417963";
    $password="9ASV68lMfHO1H";
    $dbname="if0_34417963_tutorial";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if(!$con){
        die("Connection failed: ".mysqli_connect_error());
    }

 ?>