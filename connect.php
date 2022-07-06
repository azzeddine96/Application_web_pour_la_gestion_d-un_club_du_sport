<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'myfitfourlife' ;

$my_conn = new mysqli($server, $user, $pass, $database);
if($my_conn){
   echo "connected";
}else{
    echo "prb connection";
}

?>