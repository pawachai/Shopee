<?php
	// $conn= mysqli_connect("localhost","root","","db_book") or die("Error: " . mysqli_error($con));
	// mysqli_query($conn, "SET NAMES 'utf8' "); 


    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="db_book";
    $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
?>