<?php
$db_conx = mysqli_connect("198.91.81.4", "pivottes_DBU", "P1votR0ck$", "pivottes_DB");
//host, user, password, database name
// Evaluate the connection
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} 
?>