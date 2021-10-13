<?php

require_once "config.php";
session_start();

$con = mysqli_connect(SERVER,USER,PASS,BD);

if(!$con){
    die("ERRO AO CONECTAR AO BANCO".mysqli_connect_error());
}
