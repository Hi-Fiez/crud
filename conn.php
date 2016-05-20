<?php
$engi="mysql";
$host="localhost";
$dbse="crud";
$user="root";
$pass="";

$koneksi = new PDO($engi.':dbname='.$dbse.";host=".$host,
					$user,
					$pass);
?>