<?php
define("DBHOST","localhost");
define("DBNAME","dentaldb");
define("DBUSER","root");
define("DBPASS","");

$con=mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME) or die(mysqli_connect_error());