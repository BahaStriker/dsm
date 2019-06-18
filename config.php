<?php 
session_start();
$config = array(
    "database_type"=>"mysql",
    "database_name"=>"dsm",
    "server"=>"localhost",
    "username"=>"root",
    "password"=>"ASUSZenFone3.",
    "charset"=>"utf8",
    "port"=>3306,
    "encryption_key"=>"4385fd123b9b03d81c5625274f5c82fb8e0fc6cd0a198cbdc447f5fb4ae775d9" ); 

    
    $mysqli = new mysqli('localhost', 'root', 'ASUSZenFone3.', 'dsm');

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    }



    