<?php
// Variables for database connection
$host = "localhost";
$user = "root";
$password = "";
$database = "dbsmatbk";

// Connect to database
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
// SQL query to retrieve data from database
$sql = "SELECT * FROM tblSiswa";
$sqlWali = "SELECT * FROM tblwalikelas";
$sqlNota = "SELECT * FROM tblNota";
