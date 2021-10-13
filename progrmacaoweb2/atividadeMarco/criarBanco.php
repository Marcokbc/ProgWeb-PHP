<?php

$con = mysqli_connect("localhost","root","");

$sql = "CREATE DATABASE atividadematutino";

mysqli_query($con,$sql);