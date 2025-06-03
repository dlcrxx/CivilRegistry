<?php
    $con = mysqli_connect("localhost", "root", "", "civil_registry");
    if($con == false){
        die("Connection Error". mysqli_connect_error());
    }
?>